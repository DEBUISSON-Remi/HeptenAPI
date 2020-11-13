<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use Illuminate\Http\Request;
use Psr\Http\Message\RequestInterface;
use function PHPUnit\Framework\returnArgument;

class DevisController extends Controller
{
    function list ($id = NULL){

        return $id ? Devis::Find($id) : Devis::ALL();

    }

    function add(Request $request)
    {
        $devis = new Devis;
        $devis->demandeTransport_id = $request->demandeTransport_id;
        $devis->montant = $request->montant;
        $devis->dateEnvoi = $request->dateEnvoi;
        $devis->dateArriveePrevue = $request->dateArriveePrevue;
        $devis->valide = $request->valide;
        $res = $devis->save();
        if ($res) {
            return ["result " => "success"];
        } else {
            return ["result " => "fail"];
        }
    }

    function delete($id) {
        $devis=Devis::find($id);
        $res=$devis->delete();
        if ($res) {
            return ["result " => "success"];
        } else {
            return ["result " => "fail"];
        }
    }

    function edit(Request $req){
        $devis=Devis::find($req->id);
        $devis->demandeTransport_id = $req->demandeTransport_id;
        $devis->montant = $req->montant;
        $devis->dateEnvoi = $req->dateEnvoi;
        $devis->dateArriveePrevue = $req->dateArriveePrevue;
        $devis->valide = $req->valide;
        $res = $devis->save();
        if ($res) {
            return ["result " => "success"];
        } else {
            return ["result " => "fail"];
        }

    }

}
