<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
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
        $data = About::where('id', '1')->first();
        return view('admin.about.index', compact('data'));
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
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about,$id)
    {
        $data = About::find(1);
        $data->pengantar1 = $request->pengantar1;
        $data->pengantar2 = $request->pengantar2;
        $data->pengantar3 = $request->pengantar3;
        $data->save();
        return redirect(url('AdHk-&-admin/about'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
