<?php

namespace App\Http\Controllers;

use App\Models\Vehicules;
use Illuminate\Http\Request;

class VehiculesController extends Controller
{
    function vehicules ($id = NULL){

        return $id ? Vehicules::Find($id) : Vehicules::ALL();

    }

    function add(Request $request){

        $vehicules = new Vehicules;
        $vehicules->immatriculation = $request->immatriculation;
        $vehicules->dateMiseEnCirculation = $request->dateMiseEnCirculation;
        $vehicules->kilometrageAchat = $request->kilometrageAchat;
        $vehicules->coutAchat = $request->coutAchat;
        $vehicules->modele_id = $request->modele_id;
        $res = $vehicules->save();
        if ($res) {
            return ["result " => "success"];
        } else {
            return ["result " => "fail"];
        }
    }

    function delete($id) {
        $vehicules=Vehicules::find($id);
        $res=$vehicules->delete();
        if ($res) {
            return ["result " => "success"];
        } else {
            return ["result " => "fail"];
        }
    }

    function edit(Request $req){
        $vehicules=Vehicules::find($req->id);
        $vehicules->immatriculation = $req->immatriculation;
        $vehicules->dateMiseEnCirculation = $req->dateMiseEnCirculation;
        $vehicules->kilometrageAchat = $req->kilometrageAchat;
        $vehicules->coutAchat = $req->coutAchat;
        $vehicules->modele_id = $req->modele_id;
        $res = $vehicules->save();
        if ($res) {
            return ["result " => "success"];
        } else {
            return ["result " => "fail"];
        }

    }
}
