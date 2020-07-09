<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLocationScopeRequest;
use App\Http\Requests\UpdateLocationScopeRequest;
use App\Repositories\LocationScopeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class LocationScopeController extends AppBaseController
{
    /** @var  LocationScopeRepository */
    private $locationScopeRepository;

    public function __construct(LocationScopeRepository $locationScopeRepo)
    {
        $this->locationScopeRepository = $locationScopeRepo;
    }

    /**
     * Display a listing of the LocationScope.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->locationScopeRepository->pushCriteria(new RequestCriteria($request));
        $locationScopes = $this->locationScopeRepository->all();

        return view('location_scopes.index')
            ->with('locationScopes', $locationScopes);
    }

    /**
     * Show the form for creating a new LocationScope.
     *
     * @return Response
     */
    public function create()
    {
        return view('location_scopes.create');
    }

    /**
     * Store a newly created LocationScope in storage.
     *
     * @param CreateLocationScopeRequest $request
     *
     * @return Response
     */
    public function store(CreateLocationScopeRequest $request)
    {
        $input = $request->all();

        $locationScope = $this->locationScopeRepository->create($input);

        Flash::success('Location Scope saved successfully.');

        return redirect(route('locationScopes.index'));
    }

    /**
     * Display the specified LocationScope.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $locationScope = $this->locationScopeRepository->findWithoutFail($id);

        if (empty($locationScope)) {
            Flash::error('Location Scope not found');

            return redirect(route('locationScopes.index'));
        }

        return view('location_scopes.show')->with('locationScope', $locationScope);
    }

    /**
     * Show the form for editing the specified LocationScope.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $locationScope = $this->locationScopeRepository->findWithoutFail($id);

        if (empty($locationScope)) {
            Flash::error('Location Scope not found');

            return redirect(route('locationScopes.index'));
        }

        return view('location_scopes.edit')->with('locationScope', $locationScope);
    }

    /**
     * Update the specified LocationScope in storage.
     *
     * @param  int              $id
     * @param UpdateLocationScopeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLocationScopeRequest $request)
    {
        $locationScope = $this->locationScopeRepository->findWithoutFail($id);

        if (empty($locationScope)) {
            Flash::error('Location Scope not found');

            return redirect(route('locationScopes.index'));
        }

        $locationScope = $this->locationScopeRepository->update($request->all(), $id);

        Flash::success('Location Scope updated successfully.');

        return redirect(route('locationScopes.index'));
    }

    /**
     * Remove the specified LocationScope from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $locationScope = $this->locationScopeRepository->findWithoutFail($id);

        if (empty($locationScope)) {
            Flash::error('Location Scope not found');

            return redirect(route('locationScopes.index'));
        }

        $this->locationScopeRepository->delete($id);

        Flash::success('Location Scope deleted successfully.');

        return redirect(route('locationScopes.index'));
    }
}
