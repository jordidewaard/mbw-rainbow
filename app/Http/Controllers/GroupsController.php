<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Group;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::orderBy('updated_at', 'desc')->paginate(12);
        return view('groups.groups')->with('groups', $groups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //stores a group in the DB
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:75',
            'description' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('groups/create')
            ->withErrors($validator)
            ->withInput();
        }

        $group = new Group;
        $group->title = $request->input('title');
        $group->description = $request->input('description');
        $group->save();

        return redirect('/groups')->with('success', 'je groep is al gemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = Group::find($id);
        return view('groups.view')->with('group', $group);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group = Group::find($id);
        return view('groups.edit')->with('group', $group);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $group = Group::find($id);
        $group->title = $request->input('title');
        $group->description = $request->input('description');
        $group->save(); 

       
        return redirect('/groups')->with('success', 'Groep is al bijgewerkt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = Group::find($id);
        
        $group->delete();
        
        return redirect('/groups')->with('success', 'Groep is al verwijderd');
    }
}
