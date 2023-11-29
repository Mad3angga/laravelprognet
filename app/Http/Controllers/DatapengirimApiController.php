<?php

namespace App\Http\Controllers;

use App\Models\datapengirim;
use Illuminate\Http\Request;

class DatapengirimApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return datapengirim::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datapengirim = new datapengirim();
        $datapengirim->fill($request->all())->save;
        return $datapengirim;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
