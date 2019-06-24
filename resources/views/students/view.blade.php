@extends('layouts.app') 

@section('content')

<div class="container">

    <a href="/students" class="btn btn-outline-secondary">Terug</a>

    <br><br>

    <div class="card border-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header"><h5>{{$student->name}}</h5></div>
            <div class="card-body text-secondary">
              <h5 class="card-title">Projecten: <span class="badge badge-primary">{{count($student->projects)}}</span>
              </h5>
                   <ul class="list-group list-group">
                        @if(!count($student->projects))
                           <li class="list-group-item">Student is nog niet toegevoegd aan project</li>
                        @endif

                        @foreach ($student->projects as $project)
                          <li class="list-group-item">{{ $project->title }}</li>
                       @endforeach
                  </ul>
              <hr>
              <small>Geschreven op {{$student->created_at}}</small>
              <hr>

              <div>
                    <div class="btn-group" role="group" aria-label="First group">
                        <a class="btn btn-outline-success" href="/students/{{$student->id}}/edit" class=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                    </div>
            
                    <div class="btn-group" role="group" aria-label="Second group" onclick="return confirm('Weet u het zeker?')">
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

