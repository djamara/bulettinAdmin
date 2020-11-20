<?php

namespace App\Http\Controllers;

use App\Models\BilanCovid;
use Illuminate\Http\Request;

class BilanCovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return BilanCovid::all();
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
     * @param  \App\Models\BilanCovid  $bilanCovid
     * @return \Illuminate\Http\Response
     */
    public function show(BilanCovid $bilanCovid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BilanCovid  $bilanCovid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BilanCovid $bilanCovid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BilanCovid  $bilanCovid
     * @return \Illuminate\Http\Response
     */
    public function destroy(BilanCovid $bilanCovid)
    {
        //
    }
}
