@extends('layouts.app') 

@section('content')

<div class="container">

    <a href="/students" class="btn btn-outline-secondary">Terug</a>
    <br><br>

    <div class="card border-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header"><h4>{!!$student->name!!}</h4>
    <div>
        <h5>{!!$student->name!!}</h5>
        </div>
        <div>
        <h5>studentnummer</h5>
    </div>
    <br>
        <div>
            <h3>Projecten waar deze student aan is toegevoegd: {{count($student->projects)}}</h3>
            <ul>
                @if(!count($student->projects))
                   <li>Student is nog niet toegevoegd aan project</li>
                @endif
                @foreach ($student->projects as $project)
                    <li>{{ $project->title }}</li>
                @endforeach
            </ul>
    <hr>
        <small>Geschreven op {{$student->created_at}}</small>
    <hr>
    <br>
    <div>
        <div class="btn-group" role="group" aria-label="First group">
            <a class="btn btn-outline-success" href="/students/{{$student->id}}/edit" class=""><i class="fa fa-edit" aria-hidden="true"></i></a>
        </div>
        <div class="card-body">
              <h5 class="card-title">studentnummer</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             
              <hr>
              <small>Geschreven op {{$student->created_at}}</small>
              <hr>

            <div>
                <div class="btn-group" role="group" aria-label="First group">
                    <a class="btn btn-outline-success" href="/students/{{$student->id}}/edit" class=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                </div>
        
                <div class="btn-group" role="group" aria-label="Second group">
                    {!!Form::open(['action' => ['StudentsController@destroy', $student->id], 'method' => 'POST'])!!}
                    @csrf
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::button('<i class="fa fa-minus-circle" aria-hidden="true"></i>', ['class' => 'btn btn-outline-danger', 'type' => 'submit'])}}
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

