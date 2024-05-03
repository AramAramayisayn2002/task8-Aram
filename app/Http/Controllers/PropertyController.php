<?php
namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use App\Models\PropertyType;
use App\Services\LoginService;
use App\Services\PropertyService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    public function __construct()
    {
        $this->propertyService = new PropertyService();
        $this->loginService = new LoginService();
    }

    public function create()
    {
        $types = PropertyType::all();
        return view('submit-property', compact('types'));
    }

    public function store(PropertyRequest $request)
    {
        if (!Auth::user()) {
            if ($this->loginService->getUserEmail($request->email)) {
                return redirect()->back()->with('error', 'An account with this email already exists.');
            } else {
                $password = Str::random(10);
                $this->loginService->createUser($request->username, $request->email, $request->phone, $password);
                $request->password = $password;
                $this->loginService->login($request);
            }
        }
        $newProperty = $this->propertyService->store($request);
        return redirect()->route('property.show', $newProperty->id);
    }

    public function show($id)
    {
        $property = $this->propertyService->getPropertyId($id);
        return view('single-property', compact('id'));
    }
}
