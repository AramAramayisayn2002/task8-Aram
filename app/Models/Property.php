<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'properties';

    protected $fillable = [
        'title',
        'address',
        'city',
        'state',
        'zip_code',
        'description',
        'status',
        'price',
        'area',
        'rooms',
        'building_age',
        'bedrooms',
        'bathrooms',
        'type_id',
        'user_id'
    ];

}
