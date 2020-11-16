<?php

namespace App\Http\Controllers;

use App\Models\Conducteurs;
use Illuminate\Http\Request;

class ConducteursController extends Controller
{
    function conducteurs ($id = NULL){

        return $id ? Conducteurs::Find($id) : Conducteurs::ALL();

    }

    function add(Request $request){

        $conducteurs = new Conducteurs;
        $conducteurs->nom = $request->nom;
        $conducteurs->prenom = $request->prenom;
        $conducteurs->dateEmbauche = $request->dateEmbauche;
        $conducteurs->dateNaissance = $request->dateNaissance;
        $conducteurs->dateSortie = $request->dateSortie;
        $conducteurs->Permis_id = $request->Permis_id;
        $res = $conducteurs->save();
        if ($res) {
            return ["result " => "success"];
        } else {
            return ["result " => "fail"];
        }
    }

    function delete($id) {
        $conducteurs=Conducteurs::find($id);
        $res=$conducteurs->delete();
        if ($res) {
            return ["result " => "success"];
        } else {
            return ["result " => "fail"];
        }
    }

    function edit(Request $req){
        $conducteurs=Conducteurs::find($req->id);
        $conducteurs->nom = $req->nom;
        $conducteurs->prenom = $req->prenom;
        $conducteurs->dateEmbauche = $req->dateEmbauche;
        $conducteurs->dateNaissance = $req->dateNaissance;
        $conducteurs->dateSortie = $req->dateSortie;
        $conducteurs->Permis_id = $req->Permis_id;
        $res = $conducteurs->save();
        if ($res) {
            return ["result " => "success"];
        } else {
            return ["result " => "fail"];
        }

    }
}
