<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSearchRequest;
use App\Http\Requests\UpdateSearchRequest;
use App\Repositories\SearchRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class SearchController extends AppBaseController
{
    /** @var  SearchRepository */
    private $searchRepository;

    public function __construct(SearchRepository $searchRepo)
    {
        $this->searchRepository = $searchRepo;
    }

    /**
     * Display a listing of the Search.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->searchRepository->pushCriteria(new RequestCriteria($request));
        $searches = $this->searchRepository->all();

        return view('searches.index')
            ->with('searches', $searches);
    }

    /**
     * Show the form for creating a new Search.
     *
     * @return Response
     */
    public function create()
    {
        return view('searches.create');
    }

    /**
     * Store a newly created Search in storage.
     *
     * @param CreateSearchRequest $request
     *
     * @return Response
     */
    public function store(CreateSearchRequest $request)
    {
        $input = $request->all();

        $search = $this->searchRepository->create($input);

        Flash::success('Search saved successfully.');

        return redirect(route('searches.index'));
    }

    /**
     * Display the specified Search.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $search = $this->searchRepository->findWithoutFail($id);

        if (empty($search)) {
            Flash::error('Search not found');

            return redirect(route('searches.index'));
        }

        return view('searches.show')->with('search', $search);
    }

    /**
     * Show the form for editing the specified Search.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $search = $this->searchRepository->findWithoutFail($id);

        if (empty($search)) {
            Flash::error('Search not found');

            return redirect(route('searches.index'));
        }

        return view('searches.edit')->with('search', $search);
    }

    /**
     * Update the specified Search in storage.
     *
     * @param  int              $id
     * @param UpdateSearchRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSearchRequest $request)
    {
        $search = $this->searchRepository->findWithoutFail($id);

        if (empty($search)) {
            Flash::error('Search not found');

            return redirect(route('searches.index'));
        }

        $search = $this->searchRepository->update($request->all(), $id);

        Flash::success('Search updated successfully.');

        return redirect(route('searches.index'));
    }

    /**
     * Remove the specified Search from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $search = $this->searchRepository->findWithoutFail($id);

        if (empty($search)) {
            Flash::error('Search not found');

            return redirect(route('searches.index'));
        }

        $this->searchRepository->delete($id);

        Flash::success('Search deleted successfully.');

        return redirect(route('searches.index'));
    }
}
