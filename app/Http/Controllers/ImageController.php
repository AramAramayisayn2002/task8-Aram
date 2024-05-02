<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageRequest;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(ImageRequest $request)
    {
        $image = $request->file('file');
        $fileName = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();
        $request->file('file')->storeAs('images', $fileName, 'public');
        $imagePath = storage_path('app/public/image' . '/' . $fileName);
        $newImage = new Image();
        $newImage->fill(['name' => $imagePath])->save();
        return response()->json(['id' => $newImage->id]);
    }
}
