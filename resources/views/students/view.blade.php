@extends('layouts.app') 

@section('content')

<div class="container">

<a href="/students" class="btn btn-outline-secondary">Terug</a>
<br><br>

      <div>
        <h5>{!!$student->name!!}</h5>
      </div>
      <div>
        <h5>studentnummer</h5>
      </div>
      <hr>
        <small>Geschreven op {{$student->created_at}}</small>
      <hr>
          <br>
          <div>
              <div class="btn-group" role="group" aria-label="First group">
                <a class="btn btn-outline-success" href="/students/{{$student->id}}/edit" class="">Bewerken</a>
              </div>

              <div class="btn-group" role="group" aria-label="Second group">
                  {!!Form::open(['action' => ['StudentsController@destroy', $student->id], 'method' => 'POST'])!!}
                  @csrf
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Verwijderen', ['class' => 'btn btn-outline-danger'])}}
                  {!!Form::close()!!}
              </div>
          </div>
        </div>
@endsection

