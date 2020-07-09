<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePasswordResetRequest;
use App\Http\Requests\UpdatePasswordResetRequest;
use App\Repositories\PasswordResetRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PasswordResetController extends AppBaseController
{
    /** @var  PasswordResetRepository */
    private $passwordResetRepository;

    public function __construct(PasswordResetRepository $passwordResetRepo)
    {
        $this->passwordResetRepository = $passwordResetRepo;
    }

    /**
     * Display a listing of the PasswordReset.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->passwordResetRepository->pushCriteria(new RequestCriteria($request));
        $passwordResets = $this->passwordResetRepository->all();

        return view('password_resets.index')
            ->with('passwordResets', $passwordResets);
    }

    /**
     * Show the form for creating a new PasswordReset.
     *
     * @return Response
     */
    public function create()
    {
        return view('password_resets.create');
    }

    /**
     * Store a newly created PasswordReset in storage.
     *
     * @param CreatePasswordResetRequest $request
     *
     * @return Response
     */
    public function store(CreatePasswordResetRequest $request)
    {
        $input = $request->all();

        $passwordReset = $this->passwordResetRepository->create($input);

        Flash::success('Password Reset saved successfully.');

        return redirect(route('passwordResets.index'));
    }

    /**
     * Display the specified PasswordReset.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $passwordReset = $this->passwordResetRepository->findWithoutFail($id);

        if (empty($passwordReset)) {
            Flash::error('Password Reset not found');

            return redirect(route('passwordResets.index'));
        }

        return view('password_resets.show')->with('passwordReset', $passwordReset);
    }

    /**
     * Show the form for editing the specified PasswordReset.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $passwordReset = $this->passwordResetRepository->findWithoutFail($id);

        if (empty($passwordReset)) {
            Flash::error('Password Reset not found');

            return redirect(route('passwordResets.index'));
        }

        return view('password_resets.edit')->with('passwordReset', $passwordReset);
    }

    /**
     * Update the specified PasswordReset in storage.
     *
     * @param  int              $id
     * @param UpdatePasswordResetRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePasswordResetRequest $request)
    {
        $passwordReset = $this->passwordResetRepository->findWithoutFail($id);

        if (empty($passwordReset)) {
            Flash::error('Password Reset not found');

            return redirect(route('passwordResets.index'));
        }

        $passwordReset = $this->passwordResetRepository->update($request->all(), $id);

        Flash::success('Password Reset updated successfully.');

        return redirect(route('passwordResets.index'));
    }

    /**
     * Remove the specified PasswordReset from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $passwordReset = $this->passwordResetRepository->findWithoutFail($id);

        if (empty($passwordReset)) {
            Flash::error('Password Reset not found');

            return redirect(route('passwordResets.index'));
        }

        $this->passwordResetRepository->delete($id);

        Flash::success('Password Reset deleted successfully.');

        return redirect(route('passwordResets.index'));
    }
}
