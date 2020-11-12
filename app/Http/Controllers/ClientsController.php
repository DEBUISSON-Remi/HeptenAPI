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
}
