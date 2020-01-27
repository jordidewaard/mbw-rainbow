@extends('layouts.app') 

@section('content')

<div class="container">

    <a href="/projects" class="btn btn-outline-secondary">Terug</a>
    @if(!$project->trashed())
    <a href="/project/{{$project->id}}/addstudents" class="btn btn-outline-primary row-fix">Student Toevoegen/Verwijderen</a>
    @endif
    
    <br><br>

    <div class="card border-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header"><h5>{{$project->title}} - {{$project->duration}} uur</h5></div>
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
                    <a class="btn btn-outline-success a-fix-table" href="/projects/{{$project->id}}/edit" class=""><i class="fa fa-edit" aria-hidden="true"></i></a>
            
                  <button class='btn btn-outline-danger' onclick="showDeleteForm({{$project->id}})"><i class="fa fa-minus-circle" aria-hidden="true"></i></button>
                  @if(!$project->trashed())
                      <a id="finnishButton" class="btn btn-outline-primary" href="/projects/delete/{{$project->id}}">afronden</a>
                  @else
                      <a id="finnishButton" class="btn btn-outline-secondary" href="javascript:void(0)">Afgerond</a>
                  @endif
            </div>
        </div>
    </div>
@endsection

@section('deleteWarning')
            <div id="deleteWarningForm" class="deleteWarningForm hidden opacityContainer">
                <div class="deleteWarningFormContainer">
                    <div class="card">
                        <h3>Waarschuwing</h3>
                        <p>weet je zeker dat je dit wilt verwijderen</p>
                        {!!Form::open(['id' => 'deleteForm', 'action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST'])!!}
                        @csrf
                        {{Form::hidden('_method', 'DELETE')}}

                        {{Form::button('Verwijderen', ['class' => 'btn btn-outline-danger', 'type' => 'submit'])}}
                        <a class='btn btn-outline-secondary' onclick="hideDeleteForm()">Annuleren</a>
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
@endsection