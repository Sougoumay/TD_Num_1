<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaravelController extends Controller
{
    public function index(){
        $listes=DB::table('laravel')->get();
        return view('laravel_view',compact('listes'));
    }
}
