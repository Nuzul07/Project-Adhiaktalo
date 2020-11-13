<?php

namespace App\Http\Controllers;

use App\VisiMisi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataV = VisiMisi::where('tipe', 1)->get();
        $dataM = VisiMisi::where('tipe', 2)->get();
        return view('admin.visimisi.index', compact('dataV','dataM'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VisiMisi  $visiMisi
     * @return \Illuminate\Http\Response
     */
    public function show(VisiMisi $visiMisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VisiMisi  $visiMisi
     * @return \Illuminate\Http\Response
     */
    public function edit(VisiMisi $visiMisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VisiMisi  $visiMisi
     * @return \Illuminate\Http\Response
     */
    public function visiupdate(Request $request, VisiMisi $visiMisi)
    {
        $data = VisiMisi::find($request->id);
        $data->isi = $request->isi;
        $data->tipe = 1;
        $data->save();
        return redirect(url('AdHk-&-admin/visimisi'));
    }
    public function misiupdate(Request $request, VisiMisi $visiMisi)
    {
        $data = VisiMisi::find($request->id);
        $data->isi = $request->isi;
        $data->tipe = 2;
        $data->save();
        return redirect(url('AdHk-&-admin/visimisi'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VisiMisi  $visiMisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(VisiMisi $visiMisi)
    {
        //
    }
}
