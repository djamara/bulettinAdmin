<?php

namespace App\Http\Controllers;

use App\Models\activite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ListActiviteByMonth()
    {
        //
        $query = "SELECT projets.idprojets, projets.projet_libelle,
                    SUM(activite.impactHomme) AS totalImpactHomme ,
                    SUM(activite.impactFemme) AS totalImpactFemme ,
                    SUM(activite.impactEnfant) AS totalImpactEnfant
                    FROM activite, projets
                    WHERE activite.projet_idprojets = projets.idprojets
                    GROUP BY activite.projet_idprojets";

        $result = DB::select($query);

        return $result;
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

    public function getMonthlyActiviteByProjet(Request $request){
        $query = "SELECT * FROM activite , projets
                  WHERE activite.projet_idprojets = projets.idprojets
                  AND activite.projet_idprojets = ?
                  AND MONTH(activite.date_activite)=MONTH(NOW())-1
                  AND YEAR(activite.date_activite) = YEAR(NOW()) ";

        return $result = DB::select($query , array($request->id));
    }
}
