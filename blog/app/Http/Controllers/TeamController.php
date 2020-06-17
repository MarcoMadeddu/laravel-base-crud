<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
class TeamController extends Controller
{
    public function index(){

        $teams = Team::all();
        

        return view('home' ,compact('teams'));
    }
}
