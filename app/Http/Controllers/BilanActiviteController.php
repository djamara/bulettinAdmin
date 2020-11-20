<?php

namespace App\Http\Controllers;

use App\Models\BilanActivite;
use Illuminate\Http\Request;

class BilanActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return BilanActivite::with('projet')->get();
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
     * @param  \App\Models\BilanActivite  $bilanActivite
     * @return \Illuminate\Http\Response
     */
    public function show(BilanActivite $bilanActivite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BilanActivite  $bilanActivite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BilanActivite $bilanActivite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BilanActivite  $bilanActivite
     * @return \Illuminate\Http\Response
     */
    public function destroy(BilanActivite $bilanActivite)
    {
        //
    }
}
