@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Alle Projecten</div>

                <div class="card-body">
                    <a href="/projects/create" class="btn btn-outline-primary">Project Maken</a><br><br>
                    <h4>Alle Projecten</h4>
                        @if(count($projects) > 0)

                        <table class="table table-striped">
                                <tr>
                                    <th>Titel</th>
                                    <th>Datum</th>
                                    <th class="text-right">Actie</th>
                                </tr>

                            @foreach ($projects as $project)
                                <tr>
                                    <td><a href="/projects/view/{{$project->id}}">{{$project->title}}</a></td>
                                    <td>{{$project->created_at}}</td>
                                    <td>
                                        <div class="row row-fix">
                                            <a class="btn btn-outline-success a-fix-table" href="/projects/{{$project->id}}/edit">Edit</a>
                                            {!!Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST'])!!}
                                            @csrf
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                                            {!!Form::close()!!}
                                        </div>
                                    </td>
                                </tr> 
                            @endforeach
                        </table> 
                        @else
                        <p>Er is nog geen projecten</p> 
                    @endif 
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection