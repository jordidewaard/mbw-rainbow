@extends('layouts.app')

@section('content')

<div class="container">

  <div class="d-flex">
    <a href="/projects" class="btn btn-outline-secondary" style="height: 37px;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
    <div class="ml-3">
      <h4 class="mb-0">{{$project->title}}</h4>
      <small>Geschreven op {{$project->created_at->format('d/m/Y')}}</small>
    </div>
  </div>

  <br>

  <p>{{$project->description}}</p>

  <div class="row">
    @foreach ($project->users as $user)
      <div class="col-md-6 col-lg-4">
        <div class="card border-secondary mb-3" style="height: 77px;">
          <div class="card-body text-secondary">
            <div class="d-flex">
              <span class="my-auto">{{ $user->name }}</span>
              <a href="/project/{{$project->id}}/deletestudent/{{$user->id}}" class="btn btn-outline-danger ml-auto" style="height: 37px;"><i class="fa fa-times" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    <div class=" col-md-6 col-lg-4">
      <div class="card border-secondary mb-3" style="height: 77px;">
        <div class="card-body text-secondary d-flex">
          <a href="/project/{{$project->id}}/addstudents" class="my-auto">
            <i class="fa fa-user-plus" ></i>
            <span class="ml-2">Voeg Student Toe</span>
          </a>
        </div>
      </div>
    </div>

    <div class=" col-md-6 col-lg-4">
      <div class="card border-secondary mb-3" style="height: 77px;">
        <div class="card-body text-secondary d-flex">
          <a href="/project/{{$project->id}}/addteachers" class="my-auto">
            <i class="fa fa-user-plus" ></i>
            <span class="ml-2">Voeg Leraar Toe</span>
          </a>
        </div>
      </div>
    </div>
  </div>

</div>




{{-- @foreach ($project->users as $user)
<div class="card border-secondary mb-3" style="max-width: 18rem;">
      <div class="card-header"><h5>{{$project->title}}</h5></div>
         <div class="card-body text-secondary">
            <div class="btn-group" role="group" aria-label="First group">
               <h5 class="card-title">Studenten: <span class="badge badge-primary">{{count($project->users)}}</span></h5>
            </div>
            <div class="btn-group row-fix" role="group" aria-label="Second group">
                     <a href="/project/{{$project->id}}/addstudents" class="btn btn-outline-primary row-fix"><i class="fa fa-user-plus" aria-hidden="true"></i><i class="fas fa-user-minus"></i></a>
            </div>

            <br><br>

                  <p>{{$project->description}}</p>
                       <ul class="list-group list-group">
                            @if(!count($project->users))
                               <li class="list-group-item">Er zijn nog geen studenten aan dit project gekoppeld</li>
                            @endif

                            @foreach ($project->users as $user)
                               <li class="list-group-item">{{ $user->name }}</li>
                            @endforeach
                      </ul>
                  <hr>
                  <small>Geschreven op {{$project->created_at}}</small>
                  <hr>

            <div>
               <div class="btn-group" role="group" aria-label="First group">
                  <a class="btn btn-outline-success" href="/projects/{{$project->id}}/edit" class=""><i class="fa fa-edit" aria-hidden="true"></i></a>
               </div>

               <div class="btn-group" role="group" aria-label="Second group">
                            {!!Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST'])!!}
                            @csrf
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::button('<i class="fa fa-minus-circle" aria-hidden="true"></i>', ['class' => 'btn btn-outline-danger', 'type' => 'submit'])}}
                            {!!Form::close()!!}
               </div>
            </div>
         </div>
</div>
@endforeach --}}
@endsection
