<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemandeTransport;

class DemandeTransportController extends Controller
{
    function list($id=null)
    {
        return $id?DemandeTransport::find($id):DemandeTransport::all();
    }

    function add(Request $req)
    {
        $demandeTransport = new DemandeTransport();
        $demandeTransport->client_id = $req->client_id;
        $demandeTransport->villeDepart = $req->villeDepart;
        $demandeTransport->villeArrivee = $req->villeArrivee;
        $demandeTransport->distance = $req->distance;
        $demandeTransport->duree = $req->duree;
        $demandeTransport->typeMarchandise_id = $req->typrMarchandise_id;
        $demandeTransport->volume = $req->volume;
        $demandeTransport->poids = $req->poids;
        $demandeTransport->dateDemande = $req->dateDemande;
        $demandeTransport->dateLimite = $req->dateLimite;
        $demandeTransport->CA = $req->CA;
        $result = $demandeTransport->save();
        if ($result)
        {
            return ["Resultat" => "Les données ont été enregistrées"];
        }
        else
        {
            return ["Resultat" => "Opération refusée"];
        }
    }


    function edit(Request $req)
    {
        $demandeTransport=DemandeTransport::find($req->id);
        $demandeTransport->client_id = $req->client_id;
        $demandeTransport->villeDepart = $req->villeDepart;
        $demandeTransport->villeArrivee = $req->villeArrivee;
        $demandeTransport->distance = $req->distance;
        $demandeTransport->duree = $req->duree;
        $demandeTransport->typeMarchandise_id = $req->typrMarchandise_id;
        $demandeTransport->volume = $req->volume;
        $demandeTransport->poids = $req->poids;
        $demandeTransport->dateDemande = $req->dateDemande;
        $demandeTransport->dateLimite = $req->dateLimite;
        $demandeTransport->CA = $req->CA;
        $result=$demandeTransport->save();
        if($result)
        {
            return ["Resultat"=>"Données modifiées"];
        }
        else
        {
            return ["Resultat"=>"Modification échouée"];
        }

    }

    function delete($id)
    {
        $demandeTransport = DemandeTransport::find($id);
        $result=$demandeTransport->delete();
        if($result)
        {
            return ["Resultat"=>"Données supprimées"];
        }
        else
        {
            return ["Resultat"=>"suppression echouée"];
        }

    }
}
