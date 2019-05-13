@extends('layouts.app') 

@section('content')

<div class="container">
    <h3>Project Maken</h3><br>
    {!! Form::open(['action' => 'ProjectsController@store', 'method' => 'POST']) !!} 
    @csrf

    <div class="form-group">
         {{Form::label('title', 'Titlel')}}
         {{Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Titlel...', 'required' => 'autofocus'])}}
        </div>
        <div class="form-group">
          {{Form::label('description', 'Omschrijving')}}
          {!!Form::textarea('description','', ['id' => '', 'class' => 'form-control editor', 'placeholder' => 'Omschrijving...', 'required' => 'autofocus'])!!}
        </div>
          {{Form::submit('Submit', ['class' =>'btn btn-outline-primary'])}}
    {!! Form::close() !!} 
  </div>
@endsection

