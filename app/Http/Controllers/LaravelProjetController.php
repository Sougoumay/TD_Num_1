<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\LaravelProjet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaravelProjetController extends Controller
{
    public function approved(){
        $users = LaravelProjet::all();
        return view('approved', compact('users'));
    }

    public function disapproved(){
        $users=LaravelProjet::all();
        return view('disapproved',compact('users'));
    }

    public function conform(){
        $users=LaravelProjet::all();
        return view('conform', compact('users'));
    }

    public function pending(){
        $users=LaravelProjet::get();
        return view('pending', compact('users'));
    }

    public function resultat(Request $request)
    {
        LaravelProjet::create([
            'last_name' => $request->get('nom'),
            'first_name' => $request->get('prenom'),
            'profession' => $request->get('metier'),
            'PhoneNumber' => $request->get('numero'),
            'email' => $request->get('mel'),
            'status' => $request->get('etat')
        ]);
    }
    public function form(){
        return view('getform');
    }

    public function statistique(){
        $users=LaravelProjet::all();
        $enreg=0;
        $pending=0;
        $approved=0;
        $disapproved=0;
        $conform=0;
        $somme=0;
       /* foreach($users as $user)
            if($user->id)
                $enreg+=1;
            if($user->status=='pending')
                $pending+=1;
            if($user->status=='approved');
                $approved+=1;
            if($user->status=='disapproved');
                $disapproved+=1;
            elseif($user->status=='conform')
                $conform += 1;
        endforeach
        $somme=$approved+$disapproved+$pending+$conform; */
        return view('statistique',compact('users','somme'));
    }   //dd('il est ici');
}
