<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Devis;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    function ClientsAll ($id = NULL){

        return $id ? Clients::Find($id) : Clients::ALL();

    }

    function add(Request $request){

        $client = new Clients;
        $client->raisonSociale = $request->raisonSociale;
        $res = $client->save();
        if ($res) {
            return ["result " => "success"];
        } else {
            return ["result " => "fail"];
        }
    }

    function delete($id) {
        $clients=Clients::find($id);
        $res=$clients->delete();
        if ($res) {
            return ["result " => "success"];
        } else {
            return ["result " => "fail"];
        }
    }

    function edit(Request $req){
        $clients=Clients::find($req->id);
        $clients->raisonSociale = $req->raisonSociale;
        $res=$clients->save();
        if ($res) {
            return ["result " => "success"];
        } else {
            return ["result " => "fail"];
        }

    }


}
