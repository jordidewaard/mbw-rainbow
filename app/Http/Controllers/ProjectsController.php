<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Project;
use App\User;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('updated_at', 'desc')->paginate(12);
        return view('projects.projects')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:75',
            'description' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('projects/create')
            ->withErrors($validator)
            ->withInput();
        }

        $post = new Project;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();

        return redirect('/projects')->with('success', 'je project is gemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // is only one so we cant not loop.
        $project = Project::find($id);

        if ($project)
        {
            return view('projects.view')->with('project', $project);
        }
        else
        {
            echo "Something went wrong pobably the id is invalid..";
        }
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.edit')->with('project', $project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $project = Project::find($id);
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->save(); 

       
        return redirect('/projects')->with('success', 'Project is bijgewerkt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $showProject = Project::find($id);
        
        $showProject->delete();
        
        return redirect('/projects')->with('success', 'Project wordt verwijderd');
    }
}
