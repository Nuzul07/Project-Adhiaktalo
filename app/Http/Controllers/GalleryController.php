<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $gallery = Gallery::all();
        return view('admin.gallery.index', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        ['gambar' => 'required|mimes:jpg,png,jpg,jpeg|max:2048']);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
        $g = new Gallery();
        if ($request->hasFile('gambar')) {
            $pic = $request->file('gambar');
            $name = time() . uniqid(). '.' . $pic->getClientOriginalExtension();
            $pic->move(storage_path('images'), $name);
            $g->gambar = $name;
            $g->save();
        }
        return redirect(url('AdHk-&-admin/gallery'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery,$id)
    {
        $g = Gallery::find($id);
        if (file_exists(storage_path('images/' . $g->gambar))) {
            unlink(storage_path('images/' . $g->gambar));
        }
        $g->delete();
        return redirect(url('AdHk-&-admin/gallery'));
    }
}
