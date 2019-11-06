@extends('layouts.app') 

@section('content')

<div class="container">

<a href="/projects" class="btn btn-outline-secondary">Terug</a>
<a href="/project/{{$project->id}}/addstudents" class="btn btn-outline-primary row-fix">Student Toevoegen/Verwijderen</a>

        <br><br>

        <div class="card border-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header"><h5>{{$project->title}}</h5></div>
                <div class="card-body text-secondary">
                  <h5 class="card-title">Studenten: <span class="badge badge-primary">{{count($project->users)}}</span>
                  </h5>
                  <p>{{$project->description}}</p>
                    <p><a href={{$project->link}}>Trello Bord</a></p>
                       <ul class="list-group list-group">
                            @if(!count($project->users))
                               <li class="list-group-item">Er zijn nog geen studenten aan dit project gekoppeld</li>
                            @endif

                            @foreach ($project->users as $user)
                               <li class="list-group-item">{{ $user->name }}</li>
                            @endforeach
                      </ul>
                  <hr>
                  <small>Geschreven op {{$project->created_at}}</small>
                  <hr>
    
                  <div>
                        <div class="btn-group" role="group" aria-label="First group">
                          <a class="btn btn-outline-success" href="/projects/{{$project->id}}/edit" class=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                        </div>
            
                        <div class="btn-group" role="group" aria-label="Second group">
                            {!!Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST'])!!}
                            @csrf
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::button('<i class="fa fa-minus-circle" aria-hidden="true"></i>', ['class' => 'btn btn-outline-danger', 'type' => 'submit'])}}
                            {!!Form::close()!!}
                        </div>
                  </div>
        </div>
</div>
@endsection