@extends('layouts.app') 

@section('content')
<div class="container">
    <a href="/students/view/{{ $user->id }}" class="btn btn-outline-secondary">Terug</a>
    <br><br>
    <div class="card border-secondary mb-3" style="max-width: 100%;">
        <div class="card-header"><h5>{{ $user->name }} - {{ $project }}</h5></div>
        <div class="card-body text-secondary">
            <h5 class="card-title">Hours: <span class="badge badge-primary">{{count($hours)}}</span></h5>
            <div class="widget-content">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Hours</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th class="td-actions"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!count($hours))
                           <li class="list-group-item">Project heeft nog geen ingevoerde uren</li>
                        @endif

                        @foreach ($hours as $hour)
                            <tr>
                                <td>{{ $hour->status }}</td>
                                <td>{{ $hour->hours }}</td>
                                <td>{{ $hour->description }}</td>
                                <td>{{ $hour->date }}</td>
                                <td class="td-actions">
                                    <div class="tableContainer">
                                        <form method="GET" action="/hours/edit/{{ $hour->hour_id }}">
                                            @csrf
                                            <button class="editButton"></button>
                                        </form>
                                        <form method="POST" action="/hours/delete/{{ $hour->hour_id }}">
                                            @csrf
                                            <button class="deleteButton"></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>        
            </div> 
        </div>
    </div>
</div>
@endsection

