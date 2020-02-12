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
            {{Form::label('client', 'Client')}}
            <?php $allUsers = []; ?>
              @foreach ($users as $user)
                <?php array_push($allUsers, [$user['id'] => $user['name']]); ?>
              @endforeach
            {{Form::select('clientUser', $allUsers, null, ['class' => 'form-control editor', 'placeholder' => 'Select Client...'])}}
        </div>
        <div class="form-group">
            {{Form::label('link', 'Trello Bord')}}
            {!!Form::text('link','', ['id' => '', 'class' => 'form-control editor', 'placeholder', 'required' => 'Link...'])!!}
        </div>
          {{Form::submit('Creëren', ['class' =>'btn btn-outline-primary'])}}
    {!! Form::close() !!} 
  </div>
@endsection

