<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
use App\ProjectUser;
use App\Hour;
use Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Project::orderBy('updated_at', 'desc')->paginate(12);
        return view('users.users')->with('users', $users);

    }
    
    public function student()
    {
        return view('students.students');
    }

    //shows a list of all clients
    public function client()
    {
        $clients = User::orderBy('name', 'asc')->where('role', 'C')->paginate(12);
        $projects = Project::pluck('client_id');
        return view('clients.clients')->with('clients', $clients)->with('projects', $projects);
    }

    //sorts the given data array
    function aasort (&$array, $key) {
        $sorter=array();
        $ret=array();
        reset($array);
        foreach ($array as $ii => $va) {
            $sorter[$ii]=$va[$key];
        }
        arsort($sorter);
        foreach ($sorter as $ii => $va) {
            $ret[$ii]=$array[$ii];
        }
        $array=$ret;
    }

    //shows a client if the current user is an admin or client
    public function showClient($id)
    {
        if (Auth::id() == $id && Auth::user()->role == 'C' || Auth::user()->role == 'A') {
            $projects = Project::where('client_id', $id)->pluck('id');
            $projectusers = [];
            foreach ($projects as $project) {
                $ProjectUsers = ProjectUser::where('project_id', $project)->pluck('id');
                foreach ($ProjectUsers as $ProjectUser) {
                    array_push($projectusers, $ProjectUser);
                }
            }
            $allHours = [];
            foreach ($projectusers as $projectuser) {
                $hours = Hour::where('project_user_id', $projectuser)->get();
                foreach ($hours as $hour) {
                    array_push($allHours, $hour);
                }
            }

            UsersController::aasort($allHours,"updated_at");

            return view('clients.show')->with('hours', $allHours);
        } else {
            return redirect()->back()->with('error', 'Geen toegang tot deze locatie!');
        }
    }

    public function welcome()
    {
        return view('emails.welcome');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
