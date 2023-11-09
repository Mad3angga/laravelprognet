<?php

namespace App\Http\Controllers;

use App\Models\datapengirim;
use Illuminate\Http\Request;

class DatapengirimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data = datapengirim::all();
        return view('listdatapengirim',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('datapengirimnew');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datapengirim = new datapengirim();
        $datapengirim->nama=$request->nama;
        $datapengirim->alamat=$request->alamat;
        $datapengirim->telepon=$request->telepon;
        $datapengirim->gender=$request->gender;
        $datapengirim->save();
        return redirect('datapengirim');
    }

    /**
     * Display the specified resource.
     */
    public function show(datapengirim $datapengirim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(datapengirim $datapengirim)
    {
        return view('datapengirimedit',compact('datapengirim'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, datapengirim $datapengirim)
    {
        $datapengirim->nama = $request->nama;
        $datapengirim->alamat = $request->alamat;
        $datapengirim->telepon = $request->telepon;
        $datapengirim->gender = $request->gender;
        $datapengirim->save();
        return redirect('datapengirim');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(datapengirim $datapengirim)
    {
        $datapengirim->delete();
        return redirect('datapengirim');
    }
}
