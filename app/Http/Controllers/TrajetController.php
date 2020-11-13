<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use App\Models\Trajet;

class TrajetController extends Controller
{
    function trajet ($id = NULL){

        return $id ? Trajet::Find($id) : Trajet::ALL();

    }

    function add(Request $request){

        $trajet = new Trajet;
        $trajet->devis_id = $request->devis_id;
        $trajet->vehicule_id = $request->vehicule_id;
        $trajet->conducteur_id = $request->conducteur_id;
        $trajet->dateDepart = $request->dateDepart;
        $trajet->dateArrivee = $request->dateArrivee;
        $res = $trajet->save();
        if ($res) {
            return ["result " => "success"];
        } else {
            return ["result " => "fail"];
        }
    }

    function delete($id) {
        $trajet=Trajet::find($id);
        $res=$trajet->delete();
        if ($res) {
            return ["result " => "success"];
        } else {
            return ["result " => "fail"];
        }
    }

    function edit(Request $req){
        $trajet=Trajet::find($req->id);
        $trajet = new Trajet;
        $trajet->devis_id = $req->devis_id;
        $trajet->vehicule_id = $req->vehicule_id;
        $trajet->conducteur_id = $req->conducteur_id;
        $trajet->dateDepart = $req->dateDepart;
        $trajet->dateArrivee = $req->dateArrivee;
        $res=$trajet->save();
        if ($res) {
            return ["result " => "success"];
        } else {
            return ["result " => "fail"];
        }

    }
}
