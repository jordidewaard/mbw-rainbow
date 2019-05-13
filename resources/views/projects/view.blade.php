@extends('layouts.app') 

@section('content')

<div class="container">

<a href="/projects" class="btn btn-outline-secondary">Go Back</a>
<br><br>

    

      <div>
        <h2>{!!$project->title!!}</h2>
      </div>
      <div>
        <h5>{!!$project->description!!}</h5>
      </div>
      <hr>
        <small>Written on {{$project->created_at}} by {{$project->user['name']}}</small>
      <hr>
          <br>
          <div>
              <div class="btn-group" role="group" aria-label="First group">
                <a class="btn btn-outline-success" href="/projects/{{$project->id}}/edit" class="">Edit</a>
              </div>

              <div class="btn-group" role="group" aria-label="Second group">
                  {!!Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST'])!!}
                  @csrf
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                  {!!Form::close()!!}
              </div>
          </div>
        </div>
@endsection

