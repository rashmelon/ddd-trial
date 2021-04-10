<?php

namespace App\Modules\Authentication\App\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Authentication\App\Requests\UserRequest;
use App\Modules\Authentication\Domain\Actions\CreateUserAction;
use App\Modules\Authentication\Domain\Actions\RegisterUserAction;
use App\Modules\Authentication\Domain\DataTransferObjects\UserData;
use App\Modules\Authentication\Domain\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(RegisterUserAction $rgisterUserAction, UserRequest $request): RedirectResponse
    {
//        $this->authorize('store', User::class);

        $user = $rgisterUserAction(new UserData($request->validated()));

        Session::flash('success', 'User Created');

        return Redirect::route('users.create');
    }
}
