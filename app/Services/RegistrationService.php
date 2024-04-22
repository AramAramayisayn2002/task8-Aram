<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationService
{
    /**
     * @var LoginService
     */
    private $loginService;

    /**
     * RegistrationService constructor.
     *
     * @param LoginService $loginService
     */
    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    /**
     * Sign up a new user.
     *
     * @param Request $request
     * @return User
     */
    public function signUp(Request $request): User
    {
        $User = new User;
        $User->fill([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $User->save();
        $this->loginService->login($request);
        return $User;
    }
}
