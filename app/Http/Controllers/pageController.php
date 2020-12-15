<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Exception\NotReadableException;
use Image;
use Symfony\Component\Console\Input\Input;
use App\Models\Page;
use Illuminate\Support\Facades\Auth;

class pageController extends Controller
{
    public function index()
    {
        return view('page.create');
    }
    public function data()
    {
        return view('page.index');
    }
    public function create(request $request)
    {


        $image = $request->file('image');

        // dd($request->all());
        $request->validate(
            [
                'image' => 'required',
                'path' => 'required',
                'title' => 'required',
                'slug' => 'required',
                'body' => 'required',
                'is_published' => 'required',
                'seo_description' => 'required',
                'seo_keywords' => 'required',
                'seo_title' => 'required',
            ]
        );
        // dd($image);

        $image_one_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $path = $image->store('public/pages');

        $page = page::create([
            'image' => $image_one_name,
            'path' => $path,
            'author_id' => "1",
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => "ll",
            'is_published' => $request->is_published,
            'seo_description' => $request->seo_description,
            'seo_keywords' => $request->seo_keywords,
            'seo_title' => $request->seo_title,
        ]);
    }
}
