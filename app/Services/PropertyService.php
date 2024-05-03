<?php

namespace App\Services;

use App\Models\Property;
use App\Models\PropertyImage;
use Illuminate\Support\Facades\Auth;

class PropertyService
{
    public function __construct()
    {
        $this->featureService = new FeatureService;
        $this->featureService = new FeatureService;
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
        if ($request->features) {
            foreach ($request->features as $key =>$value) {
                $this->featureService->storeContact($newProperty->id, $key);
            }
        }
        if ($request->imageIds) {
            foreach ($request->imageIds as $key => $id) {
                $newPropertyImage = new PropertyImage();
                $newPropertyImage->property_id = $newProperty->id;
                $newPropertyImage->image_id = $id;
                $newPropertyImage->save();
            }
        }
        return $newProperty;
    }

    public function getPropertyId($id)
    {
        //
    }
}
