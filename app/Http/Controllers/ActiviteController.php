<?php

namespace App\Http\Controllers;

use App\Models\activite;
use Illuminate\Http\Request;

class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Activite::with('projet')->get();
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
     * @param  \App\Models\activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function show(activite $activite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, activite $activite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\activite  $activite
     * @return \Illuminate\Http\Response
     */
    public function destroy(activite $activite)
    {
        //
    }
}
