@extends('layouts.app') 

@section('content')

<div class="container">
    <h2>Project Bewerken</h2><br>
    {!! Form::open(['action' => ['ProjectsController@update', $project->id], 'method' => 'POST']) !!} 
    @csrf

        <div class="form-group">
         {{Form::label('title', 'Titel')}}
         {{Form::text('title', $project->title, ['class' => 'form-control', 'placeholder' => 'Titel...', 'required' => 'autofocus'])}}
        </div>
        <div class="form-group">
         {{Form::label('duration', 'Uren')}}
         {{Form::text('duration', $project->duration, ['class' => 'form-control', 'placeholder' => 'Uren...', 'required' => 'autofocus'])}}
        </div>
        <div class="form-group"> 
          {{Form::label('description', 'Omschrijving')}}
          {!!Form::textarea('description', $project->description, ['id' => '', 'class' => 'form-control', 'placeholder' => 'Omschrijving...', 'required' => 'autofocus'])!!}
        </div>
        
          {{Form::hidden('_method', 'PUT')}}
          {{Form::submit('Project Bewerken', ['class' =>'btn btn-outline-primary'])}}
    {!! Form::close() !!} 
  </div>
@endsection
