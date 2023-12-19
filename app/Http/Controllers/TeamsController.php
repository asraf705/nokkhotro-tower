<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public static $team;
    public function index()
    {
        return view('admin.team.manage-team',[
            'teams' =>Team::all()
         ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.add-team');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Team::saveInfo($request);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        self::$team =Team::find($id);
        if (self::$team->status == 1){
            self::$team->status = 0;
        }
        else{
            self::$team->status = 1;
        }
        self::$team->save();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.team.edit-team',[
            'team' =>Team::find($id)
        ]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Team::updateInfo($request,$id);
        return redirect(route('teams.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        self::$team = Team::find($id);
        if (self::$team->image){
            unlink(self::$team->image);
        }
        self::$team->delete();
        return back();
    }
}
