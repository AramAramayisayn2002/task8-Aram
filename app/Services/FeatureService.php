<?php

namespace App\Services;

use App\Models\PropertyFeature;

class FeatureService
{
    public function storeContact($property_id, $feature_id)
    {
        return PropertyFeature::updateOrCreate(
            [
                'property_id' => $property_id,
                'feature_id' => $feature_id
            ]
        );
    }
}
