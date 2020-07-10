<?php

namespace App\Http\Controllers;

use App\DataTables\LocationScopeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateLocationScopeRequest;
use App\Http\Requests\UpdateLocationScopeRequest;
use App\Repositories\LocationScopeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
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
     * @param LocationScopeDataTable $locationScopeDataTable
     * @return Response
     */
    public function index(LocationScopeDataTable $locationScopeDataTable)
    {
        return $locationScopeDataTable->render('location_scopes.index');
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
