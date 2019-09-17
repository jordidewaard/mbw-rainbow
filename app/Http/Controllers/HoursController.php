<?php

namespace App\Http\Controllers;

use App\Hour;
use App\Project;
use App\ProjectUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $projects = Project::all()->toArray();
        return view('hours.studentOverview', compact('projects'));

    }

    public function addHoursToProject($project) {
        $project = Project::find($project);
        if ($project == null) abort(404);
        // TODO: redirect to error page with meaningful message 'given project does not exist'

        $user = Auth::user();
        if ($user == null) abort(404);
        // TODO: redirect to error page with meaningful message 'given project does not exist'

        $projectId = $project->id;
        $userId = $user->id;

        $projectUser = DB::table('project_user')->where('project_id', $projectId)->where('user_id', $userId)->get();
        if ($projectUser == null || isset($projectUser[0]) == false) abort(404);
        
        $projectUserId = $projectUser[0]->id;

        //$projectUser = ProjectUser::where(['project_id'=>$projectId, 'user_id'=>$userId]);
        // TODO: fix this, because this should work and is somewhat simpeler

        dd($projectUserId);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hours  $hours
     * @return \Illuminate\Http\Response
     */
    public function show(Hours $hours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hours  $hours
     * @return \Illuminate\Http\Response
     */
    public function edit(Hours $hours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hours  $hours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hours $hours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hours  $hours
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hours $hours)
    {
        //
    }
}
