@extends('layouts.app') 

@section('content')

<div class="container">

<a href="/groups" class="btn btn-outline-secondary">Go Back</a>
<br><br>

      <div>
        <h2>{!!$group->title!!}</h2>
      </div>
      <div>
        <h5>{!!$group->description!!}</h5>
      </div>
      <hr>
        <small>Written on {{$group->created_at}} by {{$group->user['name']}}</small>
      <hr>
          <br>
          <div>
              <div class="btn-group" role="group" aria-label="First group">
                <a class="btn btn-outline-success" href="/groups/{{$group->id}}/edit" class="">Edit</a>
              </div>

              <div class="btn-group" role="group" aria-label="Second group">
                  {!!Form::open(['action' => ['GroupsController@destroy', $group->id], 'method' => 'POST'])!!}
                  @csrf
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                  {!!Form::close()!!}
              </div>
          </div>
        </div>
@endsection

