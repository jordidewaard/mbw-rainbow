@extends('layouts.app')

@section('content')

<div class="container">

<a href="/groups" class="btn btn-outline-secondary"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
<br><br>

      <div class="card border-secondary mb-3" style="max-width: 18rem;">
        <div class="card-header">
          <h5>{{$group->title}}</h5>
        </div>
          <div class="card-body text-secondary">
                <p>{{$group->description}}</p>

                <hr>
                <small>Geschreven op {{$group->created_at}}</small>
                <hr>

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
      </div>
</div>
@endsection
