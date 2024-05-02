<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
//        dd($request->file('file'));
        $file = $request->file('file');
//        dd($file);
        $name = uniqid() . '.' .  $file->getClientOriginalExtension();
        $file->storeAs('public/images', $name);
        return response()->json(['name' => $name]);
    }
}

//        $ImagePath = storage_path('app/public/images/' . $name);
//        Storage::put('public/images' . $name);

//        dd($request->file);
//        $newImage = new Image();
//        $newImage->name = uniqid() . '.'
