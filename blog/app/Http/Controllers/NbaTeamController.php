<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use Illuminate\Validation\Rule;

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
       $request->validate($this->validationRules($data['name']));

       $newteam = new Team;
    //    $newteam->name = $data['name'];
    //    $newteam->city = $data['city'];
    //    $newteam->titles = $data['titles'];
    //    $newteam->description = $data['description'];
       $newteam->fill($data);
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
    public function edit(Team $team)
    {
        // $team = Team::find($id); dietro le quinte

        return view('NbaTeams.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        
        $request->validate($this->validationRules($team->id));
        //validazione
        $data = $request->all();

        $updated = $team->update($data);
        // dd($updated);


       if($updated){
        return redirect()->route('teams.show' , $team->id);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $ref= $team->name;
        $deleted = $team->delete();

        //redirect

        if($deleted){
            return redirect()->route('teams.index')->with('deleted' , $ref);
        }
    }


    //validation

    private function validationRules($id){

        return[
            'name' => [
                'required',
                'max:30',
                Rule::unique('teams')->ignore($id),
            ],
            'city' => 'required|max:20',
            'titles' => 'required',
            'description' => 'required|max:200'
        ];
    }
}
