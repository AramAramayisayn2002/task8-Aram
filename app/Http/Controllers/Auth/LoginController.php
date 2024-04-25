<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\LoginService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function show()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if ($this->loginService->login($request)) {
            return redirect()->route('index');
        }
        return redirect()->route('loginPage');
    }
}
