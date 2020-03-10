<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectUser extends Model
{
    use SoftDeletes;
    protected $table = 'project_user';

    public function Project() {
        return $this->belongsTo('App\Project');
    }

    public function ProjectName() {
    	$project = \App\Project::withTrashed()->find($this->project_id);

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
        $project = \App\Project::withTrashed()->find($this->project_id);
        return $project->duration;
    }

    public function HoursPercentage() {
        $percentage = $this->hours()->where('status', '!=', 'rejected')->where('status', '!=', 'requested')->sum('hours') / $this->maxHours() * 100;
        $percentage = round($percentage, 1);
    	return $percentage;
    }

    public function totalHours() {
        $maxHours = $this->hours()->where('status', '!=', 'rejected')->where('status', '!=', 'requested')->sum('hours');
        return $maxHours;
    }

    public function totalHoursPercentage($hours) {
        $totalHours = 400;
        $percentage = $hours / $totalHours * 100;
        $percentage = round($percentage, 1);
        return array('percentage' => $percentage, 'totalHours' => $totalHours);
    }
}
