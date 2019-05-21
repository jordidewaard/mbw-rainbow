@extends('layouts.app') 

@section('content')

<div class="container">
    <h3>Groep Maken</h3><br>
    {!! Form::open(['action' => 'GroupsController@store', 'method' => 'POST']) !!} 
    @csrf

    <div class="form-group">
         {{Form::label('title', 'Naam')}}
         {{Form::text('title','', ['class' => 'form-control', 'placeholder' => 'Groep naam...', 'required' => 'autofocus'])}}
        </div>
        <div class="form-group">
          {{Form::label('description', 'Omschrijving')}}
          {!!Form::textarea('description','', ['id' => '', 'class' => 'form-control editor', 'placeholder' => 'Omschrijving...', 'required' => 'autofocus'])!!}
        </div>
          {{Form::submit('Creëren', ['class' =>'btn btn-outline-primary'])}}
    {!! Form::close() !!} 
  </div>
@endsection

