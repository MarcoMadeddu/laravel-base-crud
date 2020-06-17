<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller
{
    public function index(){

        //ottieni tutti i record da una tabella 
        // $students = Student::all();
        // dd($students);

        // WHERE
        $students = student::where('nome' , 'marco madeddu' )->get();

        // ORDER BY (LIMIT)
        // $students = Student::orderBy('nome', 'asc') ->limit(1)->get();

         // ORDER BY
        // $students = Student::orderBy('nome', 'asc')->get();

        //first
        // $students = Student::where('id' , 1)->first();

        return view('welcome' , compact('students'));
    }
}
