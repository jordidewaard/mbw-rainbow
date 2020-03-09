@extends('layouts.app')

@section('content')

<div class="container">
    <a href="/projects/view/{{$project->id}}" class="btn btn-outline-secondary">Terug naar {{$project->title}}</a>

    <br><br>
    
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Project: {{$project->title}}</div>

                <div class="card-body">
                        @if(count($students) > 0)

                        <table class="table table-borderd table-hover">
                            <thead class="table-primary">
                                <tr class="active">
                                    <th><h4>Naam</h4></th>
                                    <th><h4>Studentnummer</h4></th>
                                    <th><h4>Actie</h4></th>

                                </tr>
                            </thead>

                            @foreach ($students as $student)
                            <tbody>
                                <tr>
                                    <td><a class="btn btn-outline-success" href="/project/{{$project->id}}/addstudent/{{$student->id}}">Toevoegen aan: {{$project->title}}</a>
                                        <a class="btn btn-outline-danger" href="/project/{{$project->id}}/deletestudent/{{$student->id}}">Verwijder uit: {{$project->title}}</a></td>
                                    <td><a href="/students/view/{{$student->id}}">{{$student->name}}</a></td>
                                    <td>studentnummer</td>
                                </tr> 
                            </tbody>
                            @endforeach
                        </table> 
                        @else
                        <p>Er zijn geen studenten</p> 
                    @endif 
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection