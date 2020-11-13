<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
    
    public function pindex()
    {
        $datap = Service::select('judulp1','judulp2','judulp3','isip1','isip2','isip3')->get();
        return view('admin.service.program', compact('datap'));
    }
    public function psindex()
    {
        $dataps = Service::select('judulps1', 'judulps2', 'judulps3', 'isips1')->get();
        return view('admin.service.proses', compact('dataps'));
    }
    public function sindex()
    {
        $datas = Service::select('syarat')->get();
        return view('admin.service.syarat', compact('datas'));
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
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function pupdate(Request $request, Service $service)
    {
        $data = Service::find(1);
        $data->judulp1 = $request->judulp1;
        $data->judulp2 = $request->judulp2;
        $data->judulp3 = $request->judulp3;
        $data->isip1 = $request->isip1;
        $data->isip2 = $request->isip2;
        $data->isip3 = $request->isip3;
        $data->save();
        return redirect(url('AdHk-&-admin/service/program'));
    }
    public function psupdate(Request $request, Service $service)
    {
        $data = Service::find(1);
        $data->judulp1 = $request->judulps1;
        $data->judulp2 = $request->judulps2;
        $data->judulp3 = $request->judulps3;
        $data->isip1 = $request->isips1;
        $data->save();
        return redirect(url('AdHk-&-admin/service/proses'));
    }
    public function supdate(Request $request, Service $service)
    {
        $data = Service::find(1);
        $data->syarat = $request->syarat;
        $data->save();
        return redirect(url('AdHk-&-admin/service/syarat'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
