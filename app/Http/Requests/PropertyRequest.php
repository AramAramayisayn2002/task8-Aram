<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'area' => 'required|numeric|min:0',
            'rooms' => 'required|numeric|min:0',
            'address' => 'required|max:255',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'building_age' => 'string',
            'bedrooms' => 'numeric|min:0',
            'bathrooms' => 'numeric|min:0',
            'type_id' => 'required|numeric',
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'numeric'
        ];
    }
}
