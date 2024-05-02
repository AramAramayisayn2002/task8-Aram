<?php

namespace App\Services;

use App\Mail\UserMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoginService
{
    public function login(Request $request): bool
    {
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];
        $remember = $request->remember;
        return Auth::attempt($credentials, $remember);
    }

    public function logout(): void
    {
        Auth::logout();
    }

    public function getUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    public function createUser($username, $email, $phone, $password)
    {
        $newUser = new User([
            'username' => $username,
            'email' => $email,
            'password' => bcrypt($password),
            'phone' => $phone
        ]);
        $newUser->save();
        return $newUser;
    }

    public function sendEmail($email, $password)
    {
        Mail::to($email)->send(new UserMail($password));
    }
}
