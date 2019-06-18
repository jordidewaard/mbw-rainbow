@extends('layouts.app')

@section('content')

<div class="container">
    <a href="/projects" class="btn btn-outline-secondary"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
    <h3 class="text-center">Project Maken</h3><br>
    {!! Form::open(['action' => 'ProjectsController@store', 'method' => 'POST']) !!}
    @csrf

    <div class="form-group">
         {{Form::label('title', 'Titel')}}
         {{Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Titel...', 'required' => 'autofocus'])}}
        </div>
        <div class="form-group">
          {{Form::label('description', 'Omschrijving')}}
          {!!Form::textarea('description','', ['id' => '', 'class' => 'form-control editor', 'placeholder' => 'Omschrijving...', 'required' => 'autofocus'])!!}
        </div>
          {{Form::submit('Creëren', ['class' =>'btn btn-outline-primary'])}}
    {!! Form::close() !!}

  </div>
@endsection
