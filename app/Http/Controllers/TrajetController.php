<?php

namespace App\Http\Controllers;

use App\Models\Devis;
use Illuminate\Http\Request;
use App\Models\Trajet;

class TrajetController extends Controller
{
    function trajet ($id = NULL){

        return $id ? Trajet::Find($id) : Trajet::ALL();

    }
}
