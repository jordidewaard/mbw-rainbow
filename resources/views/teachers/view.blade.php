@extends('layouts.app')

@section('content')

<div class="container">

    <a href="/teachers" class="btn btn-outline-secondary"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>

    <br><br>

    <div class="card border-secondary mb-3" style="max-width: 18rem;">
            <div class="card-header"><h5>{{$teacher->name}}</h5></div>
            <div class="card-body text-secondary">
              <h5 class="card-title">Projecten: <span class="badge badge-primary">{{count($teacher->projects)}}</span>
              </h5>
                   <ul class="list-group list-group">
                        @if(!count($teacher->projects))
                           <li class="list-group-item">teacher is nog niet toegevoegd aan project</li>
                        @endif

                        @foreach ($teacher->projects as $project)
                          <li class="list-group-item">{{ $project->title }}</li>
                       @endforeach
                  </ul>
              <hr>
              <small>Geschreven op {{$teacher->created_at}}</small>
              <hr>
                </div>
            </div>
    </div>
</div>
@endsection
