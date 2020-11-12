<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Devis;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    function list ($id = NULL){

        return $id ? Devis::Find($id) : Devis::ALL();

    }

    function add(Request $request){
        $devis = new Devis;
        $devis->demandeTransport_id = $request->demandeTransport_id;
        $devis->montant = $request->montant;
        $devis->dateEnvoi = $request->dateEnvoi;
        $devis->dateArriveePrevue = $request->dateArriveePrevue;
        $devis->valide = $request->valide;
        $res = $devis->save();
        if($res){
            return ["result "=> "success"];
        }
        else{
            return ["result "=> "fail"];
        }

    }
}
