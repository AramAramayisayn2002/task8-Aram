<?php

namespace App\Services;

use App\Models\Property;
use App\Models\PropertyType;
use Illuminate\Support\Facades\Auth;

class PropertyService
{
    public function __construct()
    {
        $this->featureservice = new FeatureService;
    }

    public function store($request)
    {
        $newProperty = new Property();
        $newProperty->fill([
            'title' => $request->title,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'description' => $request->description,
            'status' => $request->status,
            'price' => $request->price,
            'area' => $request->area,
            'rooms' => $request->rooms,
            'building_age' => $request->building_age,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'type_id' => $request->type_id,
            'user_id' => $request->user ?? Auth::user()->id
        ]);
        $newProperty->save();
        foreach ($request->features as $key => $value) {
            if ($value == 'on') {
                $this->featureservice->store($newProperty->id, $key);
            }
        }
        
    }
}
