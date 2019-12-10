@extends('layouts.app') 

@section('content')

<div class="container">
    <a href="{{ URL::previous() }}" class="btn btn-outline-secondary">Terug</a>
    <br><br>
        {!! Form::open(['action' => ['HoursController@update', $hour->id], 'method' => 'POST']) !!} 
        @csrf

        <div class="form-group">
        {{Form::label('hours', 'Uren')}}
        {{Form::number('hours', $hour->hours, ['class' => 'form-control', 'placeholder' => 'Uren', 'required' => 'autofocus'])}}
        </div>
        <div class="form-group">
        {{Form::label('description', 'Beschrijving')}}
        {{Form::text('description', $hour->description, ['class' => 'form-control', 'placeholder' => 'Beschrijving', 'required' => 'autofocus'])}}
        </div>
        
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Uur Bewerken', ['class' =>'btn btn-outline-primary'])}}
        {!! Form::close() !!} 
</div>
@endsection

