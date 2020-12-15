<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Exception\NotReadableException;
use Image;
use App\Models\image as imageModel;

class upload_image extends Controller
{
    public function index()
    {
        return view('upload');
    }
    public function upload(request $request)
    {




        $image = $request->photo_name;
        if ($image) {

            $image_one_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            // $location = 'images/' . $image_one_name;
            $path = $image->store('public/images');
            //  $data['photo_name'] = public_path('media/' . $image_one_name);
            imageModel::create([
                'image' => $image_one_name,
                'path' => $path
            ]);
        }
    }
}
