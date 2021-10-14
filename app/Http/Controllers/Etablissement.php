<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Etablissement extends Controller
{
    public function ecole(){
        $lycee1 = 'Lycee Ibnou-Cina';
        $lycee2 = 'Lycee Felix-Eboue';
        $lycee3 = 'Lycee Roi-Faysal';
        $lycee4 = 'Lycee Masdjid-Annour';
        $lycee5 = 'Lycee Centre Kowetien';
        $lycee6 = 'Lycee-College Evangelique';
        $lycee7 = 'Lycee Sacre-Coeur';
        $lycee8 = 'Lycee-College Fort-Lamy';
        $lycee9 = 'Lycee Ibnou-Mahadjir';
        $lycee10 = 'Lycee de la Liberte';
        return view('etablissement', compact('lycee1','lycee2','lycee3','lycee4','lycee5','lycee6','lycee7','lycee8','lycee9','lycee10'));
    }
}
