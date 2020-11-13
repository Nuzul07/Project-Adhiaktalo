<?php

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
Route::get('/images/{filename}', function ($filename) {
    $path = storage_path('images') . '/' . $filename;
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file);
    $response->header("Content-Type", $type);
    return $response;
});
Route::get('/images/testimoni/{filename}', function ($filename) {
    $path = storage_path('images/testimoni') . '/' . $filename;
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file);
    $response->header("Content-Type", $type);
    return $response;
});


Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('services', function () {
    return view('service');
});
Route::get('testimoni', function () {
    return view('testimoni');
});
Route::get('/gallery/seemore', function () {
    return view('admin.gallery.seemore');
});


Route::get('AdHk-&-admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('AdHk-&-admin/login', 'Auth\LoginController@login');
Route::post('AdHk-&-admin/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => 'no-cache'], function () {
    Route::get('AdHk-&-admin', 'HomeController@index');
});

Route::group(['middleware' => 'no-cache'], function () {
    Route::group(['prefix' => 'AdHk-&-admin'], function () {
        //Gallery
        Route::get('/gallery', 'GalleryController@index');
        Route::get('/gallery/create', 'GalleryController@create');
        Route::post('/gallery/store', 'GalleryController@store');
        Route::get('/gallery/destroy/{id}', 'GalleryController@destroy');

        //About
        Route::get('/about', 'AboutController@index');
        Route::post('/about/update/{id}', 'AboutController@update');

        //Footer
        Route::get('/footer', 'FooterController@index');
        Route::post('/footer/update/{id}', 'FooterController@update');

        //contact
        Route::get('/contact', 'ContactController@index');
        Route::post('/contact/update/{id}', 'ContactController@update');

        //VisiMisi
        Route::get('/visimisi', 'VisiMisiController@index');
        Route::post('/visimisi/visi/update/{id}', 'VisiMisiController@visiupdate');
        Route::post('/visimisi/misi/update/{id}', 'VisiMisiController@misiupdate');

        //Service
        Route::get('/service/program', 'ServiceController@pindex');
        Route::get('/service/proses', 'ServiceController@psindex');
        Route::get('/service/syarat', 'ServiceController@sindex');
        Route::post('/service/program/update/{id}', 'ServiceController@pupdate');
        Route::post('/service/proses/update/{id}', 'ServiceController@psupdate');
        Route::post('/service/syarat/update/{id}', 'ServiceController@supdate');

        //Portofolio
        Route::get('/testimoni', 'TestimoniController@index');
        Route::get('/testimoni/create', 'TestimoniController@create');
        Route::post('/testimoni/store', 'TestimoniController@store');
        Route::get('/testimoni/edit/{id}', 'TestimoniController@edit');
        Route::post('/testimoni/update/{id}', 'TestimoniController@update');
        Route::get('/testimoni/destroy/{id}', 'TestimoniController@destroy');
    });
});
