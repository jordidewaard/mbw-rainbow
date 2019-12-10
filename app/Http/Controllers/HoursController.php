<?php

namespace App\Http\Controllers;

use App\User;
use App\Hour;
use App\Project;
use App\ProjectUser;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HoursController extends Controller
{
    public function apitest()
    {
        return json_encode(['data1' => 'data1body', 'data2' => 'data2body']);
    }


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

    public function requestHoursToProject($user, $project)
    {
        $hours = $_POST['hours'];

        if ($project == null) abort(404);
        // TODO: redirect to error page with meaningful message 'given project does not exist'

        if ($user == null) abort(404);
        // TODO: redirect to error page with meaningful message 'given project does not exist'

        if ($hours == null) abort(404);
        // TODO: redirect to error page with meaningful message 'given hour is invalid'

        $projectUser = DB::table('project_user')->where('project_id', $project)->where('user_id', $user)->get();
        if ($projectUser == null || isset($projectUser[0]) == false) abort(404);

        $projectUserId = $projectUser[0]->id;

        //dd($projectUser);

        $h = new Hour();
        $h->project_user_id = $projectUserId;
        $h->hours = $hours;
        $h->date = Carbon::now();
        $h->status = 'requested';
        $h->description = 'Student ' . $user . ' heeft ' . $hours . ' uren aangevraagd';
        $h->save();

        return redirect('students/view/' . $user)->with('success', 'Uren zijn aangevraagd.');
    }

    public function addHoursToProject($user, $project)
    {
        $hours = $_POST['hours'];

        if ($project == null) abort(404);
        // TODO: redirect to error page with meaningful message 'given project does not exist'

        if ($user == null) abort(404);
        // TODO: redirect to error page with meaningful message 'given project does not exist'

        if ($hours == null) abort(404);
        // TODO: redirect to error page with meaningful message 'given hour is invalid'

        $projectUser = DB::table('project_user')->where('project_id', $project)->where('user_id', $user)->get();
        if ($projectUser == null || isset($projectUser[0]) == false) abort(404);

        $projectUserId = $projectUser[0]->id;

        //dd($projectUser);

        if ($hours == 0) {
            return redirect('students/view/' . $user)->with('error', 'Kan niet 0 uur toevoegen.');
        } else {
            $h = new Hour();
            $h->project_user_id = $projectUserId;
            $h->hours = $hours;
            $h->date = Carbon::now();
            if ($hours > 0) {
                $h->status = 'added';
                $h->description = 'Leraar ' . $user . ' heeft ' . $hours . ' uren toegevoegd';
            } else if ($hours < 0) {
                $h->status = 'removed';
                $h->description = 'Leraar ' . $user . ' heeft ' . $hours . ' uren verwijderd';
            }
            $h->save();

            return redirect('students/view/' . $user)->with('success', 'Uren zijn opgeslagen.');
        }
    }

    public function acceptHoursRequest($project)
    {
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hours $hours
     * @return \Illuminate\Http\Response
     */
    public function show($projectUserId)
    {
        $hours = Hour::get()->where('project_user_id', $projectUserId);
        $project = ProjectUser::find($projectUserId)->ProjectName();
        $user = ProjectUser::find($projectUserId)->UserName();
        return view('hours.view')->with('hours', $hours)->with('project', $project)->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hours $hours
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hour = Hour::get()->where('hour_id', $id)->first();
        return view('hours.edit')->with('hour', $hour);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Hours $hours
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hours $hours)
    {
        $data = $request->all();
        return dd($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hours $hours
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hour::where('hour_id', $id)->delete();
        return back();
    }
}
