<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Services\RegistrationService;

class RegistrationController extends Controller
{
    public function __construct(RegistrationService $registrationService)
    {
        $this->registrationService = $registrationService;
    }

    public function show()
    {
        return view('registration');
    }

    public function signUp(RegistrationRequest $request)
    {
        $user = $this->registrationService->signUp($request);
        return redirect()->route('index');
    }
}
