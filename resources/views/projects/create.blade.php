@extends('layouts.app') 

@section('content')

<div class="container">
    <h3>Project Maken</h3><br>
    {!! Form::open(['action' => 'ProjectsController@store', 'method' => 'POST']) !!} 
    @csrf

        <div class="form-group">
         {{Form::label('title', 'Titel')}}
         {{Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Titel...', 'required' => 'autofocus'])}}
        </div>
        <div class="form-group">
         {{Form::label('duration', 'Uren')}}
         {{Form::text('duration','', ['class' => 'form-control', 'placeholder' => 'Uren...', 'required' => 'autofocus'])}}
        </div>
        <div class="form-group">
          {{Form::label('description', 'Omschrijving')}}
          {!!Form::textarea('description','', ['id' => '', 'class' => 'form-control editor', 'placeholder' => 'Omschrijving...', 'required' => 'autofocus'])!!}
        </div>
        <div class="form-group">
            {{Form::label('link', 'Trello Bord')}}
            {!!Form::text('link','', ['id' => '', 'class' => 'form-control editor', 'placeholder', 'required' => 'Link...'])!!}
        </div>
          {{Form::submit('Creëren', ['class' =>'btn btn-outline-primary'])}}
    {!! Form::close() !!} 
  </div>
@endsection

