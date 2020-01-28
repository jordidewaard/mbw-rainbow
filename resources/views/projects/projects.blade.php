@extends('layouts.app')

@section('content')

<div class="container">
    <a href="/home" class="btn btn-outline-secondary">Ga terug naar home</a>

    <br><br>
    
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Alle Projecten</div>

                <div class="card-body">
                    <a href="/projects/create" class="btn btn-outline-primary">Project Maken</a><br><br>
                        @if(count($projects) > 0)

                        <table class="table table-striped">
                                <tr>
                                    <th><h4>Titel</h4></th>
                                    <th class="text-center"><h4>Datum</h4></th>
                                    <th class="text-right"><h4>Actie</h4></th>
                                </tr>

                            @foreach ($projects as $project)
                                <tr>
                                    <td><a href="/projects/view/{{$project->id}}">{{$project->title}}</a></td>
                                    <td class="text-center">{{$project->created_at}}</td>
                                    <td>
                                        <div class="row row-fix">
                                            <a class="btn btn-outline-success a-fix-table" href="/projects/{{$project->id}}/edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            <button class='btn btn-outline-danger' onclick="showDeleteForm({{$project->id}})"><i class="fa fa-minus-circle" aria-hidden="true"></i></button>
                                            @if(!$project->trashed())
                                                <a id="finnishButton" class="btn btn-outline-primary" href="/projects/delete/{{$project->id}}">afronden</a>
                                            @else
                                                <a id="finnishButton" class="btn btn-outline-secondary" href="javascript:void(0)">Afgerond</a>
                                            @endif
                                        </div>
                                    </td>
                                </tr> 
                            @endforeach
                        </table> 
                        @else
                        <p>Er zijn nog geen projecten</p> 
                    @endif 
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection

@section('deleteWarning')
        @if(count($projects) > 0)
            <div id="deleteWarningForm" class="deleteWarningForm hidden opacityContainer">
                <div class="deleteWarningFormContainer">
                    <div class="card">
                        <h3>Waarschuwing</h3>
                        <p>weet je zeker dat je dit wilt verwijderen</p>
                        {!!Form::open(['id' => 'deleteForm', 'action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST'])!!}
                        @csrf
                        {{Form::hidden('_method', 'DELETE')}}

                        {{Form::button('Verwijderen', ['class' => 'btn btn-outline-danger', 'type' => 'submit'])}}
                        <a class='btn btn-outline-secondary' onclick="hideDeleteForm()">Annuleren</a>
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        @endif
@endsection