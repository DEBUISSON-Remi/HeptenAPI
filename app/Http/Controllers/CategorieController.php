<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers;
class CategorieController extends Controller
{
    function categorieAll($id = NULL)
    {
        return $id ? Categorie::Find($id) : Categorie::ALL();
    }
}
