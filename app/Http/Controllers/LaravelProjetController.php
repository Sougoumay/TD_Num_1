<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaravelProjetController extends Controller
{
    public function form(){
        return view('getform');
    }

    public function approved(){
        $users=Home::all();
        $db=DB::table('laravel_projets')->get();
        dd($users,$db);
        return view('approved');
    }

    public function disapproved(){
        $users=Home::all();
        $db=DB::table('laravel_projets')->get();
        dd($users,$db);
        return view('disapproved');
    }

    public function conform(){
        $users=Home::all();
        $db=DB::table('laravel_projets')->get();
        dd($users,$db);
        return view('conform');
    }

    public function pending(){
        $users=Home::all();
        $db=DB::table('laravel_projets')->get();
        dd($users,$db);
        return view('pending');
    }

    public function resultat(Request $request){
        Home::create([
            'last_name'=>$request->get('nom'),
            'first_name'=>$request->get('prenom'),
            'profession'=>$request->get('metier'),
            'PhoneNumber'=>$request->get('numero'),
            'email'=>$request->get('mel'),
            'status'=>$request->get('etat')
        ]);
        //dd('il est ici');
    }
}
