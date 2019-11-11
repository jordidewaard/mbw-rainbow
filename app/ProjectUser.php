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
    	$project = \App\Project::find($this->project_id);

        if ( $project == null ) {
            return null;
        } else {
            return $project->title;
        }
    }

    public function UserName() {
    	$userid = $this->user_id;

    	return \App\User::find($userid);
    }

    public function hours() {
        return $this->hasMany('App\Hour');
    }

    public function maxHours() {
        $project = \App\Project::find($this->project_id);
        return $project->duration;
    }

    public function totalHours() {
        $percentage = $this->hours()->sum('hours') / $this->maxHours() * 100;
        $percentage = round($percentage, 1);
    	return $percentage;
    }
}
