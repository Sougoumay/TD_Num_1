<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Identite extends Controller
{
    public function identite()
    {
        $nom = "Hamid";
        $prenom = "Sougouma Ali";
        $numTel = "+33774606472";
        $institution = "universite de Orleans";
        return view('identite', compact('nom','prenom','numTel','institution'));
    }
}
