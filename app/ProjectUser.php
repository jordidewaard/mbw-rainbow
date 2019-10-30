<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    protected $table = 'project_user';

    public function Project() {
    	return $this->belongsTo('App\Project');
    }

    public function ProjectName() {
    	$projectid = $this->project_id;

    	return \App\Project::find($projectid)->title;
    }

    public function UserName() {
    	$userid = $this->user_id;

    	return \App\User::find($userid);
    }
}
