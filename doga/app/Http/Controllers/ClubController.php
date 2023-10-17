<?php

namespace App\Http\Controllers;

use App\Models\clubs;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    //GET
    public function index()
    {
        $club = response()->json(clubs::all());
        return $club;
    }

    public function show($id)
    {
        $club = response()->json(clubs::find($id));
        return $club;
    }

    //DESTROY, POST, PUT
    public function destroy($id)
    {
       clubs::find($id)->delete();
    }


    public function store(Request $request)
    {
        $club = new clubs();
        $club->club_id = $request->club_id;
        $club->establishment = $request->establishment;
        $club->location = $request->location;
        $club->max_number = $request->max_number;
        $club->save();
        return redirect('/clubs/list');
    }

    public function update(Request $request, $id)
    {
        $club = clubs::find($id);
        $club->club_id = $request->club_id;
        $club->establishment = $request->establishment;
        $club->location = $request->location;
        $club->max_number = $request->max_number;
        $club->save();
        return redirect('/clubs/list');
    }

    public function newView(){
        $club = clubs::all();
        return view('clubs.new', ['clubs' => $club]);
    }

    public function editView($id){
        $club = clubs::all();
        $task = clubs::find($id);
        return view('clubs.edit', ['clubs' => $club, 'clubs' =>$task]);
    }

    public function listView(){
        $club = clubs::all();
        return view('clubs.list', ['clubs' => $club]);
    }

    
}
