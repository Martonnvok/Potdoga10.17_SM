<?php

namespace App\Http\Controllers;

use App\Models\clubs;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
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
    }

    public function update(Request $request, $id)
    {
        $club = clubs::find($id);
        $club->club_id = $request->club_id;
        $club->establishment = $request->establishment;
        $club->location = $request->location;
        $club->max_number = $request->max_number;
        $club->save();
    }

    public function newView(){
        $club = clubs::all();
        return view('club.new', ['clubs' => $club]);
    }

    /*public function editView($id){
        $club = clubs::all();
        $task = Task::find($id);
        return view('task.edit', ['clubs' => $club, 'task' =>$task]);
    }*/

    public function listView(){
        $club = clubs::all();
        return view('club.list', ['clubs' => $club]);
    }

    
}
