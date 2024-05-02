<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationService
{
    private $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function signUp(Request $request): User
    {
        $User = new User;
        $User->fill([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        $User->save();
        $this->loginService->login($request);
        return $User;
    }
}
