<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\LaravelProjet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaravelProjetController extends Controller
{
    public function approved(){
        $users = LaravelProjet::whereStatus("approved")->get();
        return view('approved', compact('users'));
    }

    public function disapproved(){
        $users = LaravelProjet::whereStatus("disapproved")->get();
        return view('disapproved',compact('users'));
    }

    public function conform(){
        $users = LaravelProjet::whereStatus("conform")->get();
        return view('conform', compact('users'));
    }

    public function pending(){
        $users = LaravelProjet::whereStatus("pending")->get();
        return view('pending', compact('users'));
    }

    public function resultat(Request $request)
    {
        $data = $request->validate([
            'last_name' => 'string|required|min:2',
            'first_name' => 'string|required|min:2',
            'profession' => 'string|required|min:2',
            'PhoneNumber' => 'numeric|required|max:161718751451',
            'email' => 'string|required',
            'status' => 'string|required'
        ]);
        //dd($data);
        LaravelProjet::create($data);
    }
    public function form(){
        return view('getform');
    }

    public function statistique(){
        $somme=LaravelProjet::all()->count();
        $pending=LaravelProjet::whereStatus('pending')->count();
        $approved=LaravelProjet::where('status','approved')->count();
        $disapproved=LaravelProjet::where('status','disapproved')->count();
        $conform=LaravelProjet::where('status','conform')->count();
        return view('statistique',compact('pending','conform','approved','disapproved','somme'));
    }

    public function laravelProjectShow($id){
        $users=LaravelProjet::whereId($id)->first();
        //dd($users);
        return view('laravelprojectshow',compact('users'));
    }

    public function laravelProjectEdit($id){
        /*$data = $request->validate([
            'last_name' => 'string|required|min:2',
            'first_name' => 'string|required|min:2',
            'profession' => 'string|required|min:2',
            'PhoneNumber' => 'numeric|required|max:12',
            'email' => 'string|required',
            'status' => 'string|required'
        ]);*/
        $users = LaravelProjet::whereId($id)->first();
        return view('laravelprojectedit',compact('users'));
    }

    public function laravelProjectedited($id, Request  $request){
        $data = $request->validate([
            'last_name' => 'string|required|min:2',
            'first_name' => 'string|required|min:2',
            'profession' => 'string|required|min:2',
            'PhoneNumber' => 'numeric|required|max:12654651651',
            'email' => 'string|required',
            'status' => 'string|required'
        ]);
        $modification = LaravelProjet::find($id)->update($data);
        dd($modification);
        return back();
    }

    public function laravelProjectDelete($id){
        $users=LaravelProjet::find($id);
        if($id%2===0)
            $users->forceDelete();
        else
            $users->delete();
        return back();
    }
}
