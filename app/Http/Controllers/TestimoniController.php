<?php

namespace App\Http\Controllers;

use App\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = Testimoni::all();
        return view('admin.testimoni.index', compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimoni.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $t = new Testimoni();
        $t->name = $request->name;
        $t->judul = $request->judul;
        $t->isi = $request->isi;
        $t->date = $request->date;
        if ($request->hasFile('pic')) {
            $pic = $request->file('pic');
            $pic2 = time() . uniqid() . '.' . $pic->getClientOriginalExtension();
            $pic->move(storage_path('images/testimoni'), $pic2);
            $t->pic = $pic2;
        }
        $t->save();
        return redirect(url('AdHk-&-admin/testimoni'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimoni $testimoni, $id)
    {
        $test = Testimoni::find($id);
        return view('admin.testimoni.edit', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimoni $testimoni, $id)
    {
        $t = Testimoni::find($request->id);
        $t->name = $request->name;
        $t->judul = $request->judul;
        $t->isi = $request->isi;
        $t->date = $request->date;
        if ($request->hasFile('pic')) {
            $pic = $request->file('pic');
            $oldpath = storage_path('images/testimoni/' . $t->pic);
            if (file_exists($oldpath))
            {
                File::delete($oldpath);
            }
            $pic2 = time() . uniqid() . '.' . $pic->getClientOriginalExtension();
            $pic->move(storage_path('images/testimoni'), $pic2);
            $t->pic = $pic2;
        }
        $t->save();
        return redirect(url('AdHk-&-admin/testimoni'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimoni $testimoni, $id)
    {
        $test = Testimoni::find($id);
        if (file_exists(storage_path('images/testimoni/' . $test->pic))) {
            File::delete(storage_path('images/testimoni/' . $test->pic));
        }
        $test->delete();
        return redirect(url('AdHk-&-admin/testimoni'));
    }
}
