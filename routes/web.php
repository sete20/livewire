<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\upload_image;
use App\http\Controllers\pageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::get('/photos/create', function () {
    return view('photo.create');
});
route::get('/photos/edit/{id}', function () {
    return view('photo.edit');
});

route::get('/pages/create', function () {
    return view('page.create');
});
route::get('/pages/edit/{id}', function () {
    return view('page.edit');
});

// route::post('/uploaded', [upload_image::class, 'upload'])->name('uploaded');
// route::get('/pages', [pageController::class, 'index']);
// route::get('/data', [pageController::class, 'data']);

route::post('/create', [pageController::class, 'create'])->name('page.create');
route::get('/counter', function () {
    return view('test');
});
route::get('/search', function () {
    return view('search');
});
// $request->validate(['image' => 'required', 'name' => 'string|required']);
// // $data = $request->validated();



// $image = $request->file('image');
// if ($image) {

//     $image_one_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
//     // $location = 'images/' . $image_one_name;
//     $path = $image->store('public/images');
//     $name = $request->name;
//     //  $data['photo_name'] = public_path('media/' . $image_one_name);
//     Photo::create([
//         'image' => $image_one_name,
//         'path' => $path,
//         'name' => $name
//     ]);
// }

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('task.index')->middleware('auth');
Route::post('/tasks', [App\Http\Controllers\TaskController::class, 'store'])->name('task.store');
