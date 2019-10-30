@extends('layouts.app') 

@section('content')

<div class="container">
    <a href="/students/view/{{ $user->id }}" class="btn btn-outline-secondary">Terug</a>
    <br><br>
    <div class="card border-secondary mb-3" style="max-width: 100%;">
        <div class="card-header"><h5>{{ $user->name }} - {{ $project }}</h5></div>
        <div class="card-body text-secondary">
            <h5 class="card-title">Hours: <span class="badge badge-primary">{{count($hours)}}</span>
            </h5>
        <ul class="list-group list-group">
            @if(!count($hours))
               <li class="list-group-item">Project heeft nog geen ingevoerde uren</li>
            @endif

            @foreach ($hours as $hour)
                <li class="list-group-item">
                    <div class="hour col-2">
                        {{ $hour->status }}
                    </div>
                    <div class="hour col-1">
                        {{ $hour->hours }}
                    </div>
                    <div class="hour col-5">
                        {{ $hour->description }}
                    </div>
                    <div class="hour col-2">
                        {{ $hour->date }}
                    </div>
                    <div class="hour col-1">
                        <button class="btn btn-secondary">Edit</button>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection

