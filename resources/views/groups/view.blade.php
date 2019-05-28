@extends('layouts.app') 

@section('content')

<div class="container">

<a href="/groups" class="btn btn-outline-secondary">Terug</a>
<br><br>

      <div>
        <h2>{!!$group->title!!}</h2>
      </div>
      <div>
        <h5>{!!$group->description!!}</h5>
      </div>
      <hr>
        <small>Geschreven op {{$group->created_at}}</small>
      <hr>
          <br>
          <div>
              <div class="btn-group" role="group" aria-label="First group">
                <a class="btn btn-outline-success" href="/groups/{{$group->id}}/edit" class=""><i class="fa fa-edit" aria-hidden="true"></i></a>
              </div>

              <div class="btn-group" role="group" aria-label="Second group">
                  {!!Form::open(['action' => ['GroupsController@destroy', $group->id], 'method' => 'POST'])!!}
                  @csrf
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::button('<i class="fa fa-minus-circle" aria-hidden="true"></i>', ['class' => 'btn btn-outline-danger', 'type' => 'submit'])}}
                  {!!Form::close()!!}
              </div>
          </div>
        </div>
@endsection

