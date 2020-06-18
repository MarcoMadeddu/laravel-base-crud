<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class NbaTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams= Team::all();
        return view('NbaTeams.index' , compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('NbaTeams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data= $request->all();

       //validazione
       $request->validate([
            'name' => 'required|unique:teams|max:30',
            'city' => 'required|max:20',
            'titles' => 'required',
            'description' => 'required|max:200'
       ]);

       $newteam = new Team;
       $newteam->name = $data['name'];
       $newteam->city = $data['city'];
       $newteam->titles = $data['titles'];
       $newteam->description = $data['description'];
       $saved = $newteam->save();
       

       if($saved){
           $newteam = Team::find($newteam->id);
           return redirect()->route('teams.show' , $newteam);
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        // dd($id);
        // $team = Team::find($id);
        return view('NbaTeams.show' , compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
