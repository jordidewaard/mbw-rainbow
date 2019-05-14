@extends('layouts.app') 

@section('content')

<div class="container">
    <h2>Group Bewerk</h2><br>
    {!! Form::open(['action' => ['GroupsController@update', $group->id], 'method' => 'POST']) !!} 
    @csrf

    <div class="form-group">
         {{Form::label('title', 'Titel')}}
         {{Form::text('title', $group->title, ['class' => 'form-control', 'placeholder' => 'Group naam...', 'required' => 'autofocus'])}}
        </div>
        <div class="form-group"> 
          {{Form::label('description', 'Omschrijving')}}
          {!!Form::textarea('description', $group->description, ['id' => '', 'class' => 'form-control', 'placeholder' => 'Omschrijving...', 'required' => 'autofocus'])!!}
        </div>
        
          {{Form::hidden('_method', 'PUT')}}
          {{Form::submit('Submit', ['class' =>'btn btn-outline-primary'])}}
    {!! Form::close() !!} 
  </div>
@endsection
