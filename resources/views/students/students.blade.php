@extends('layouts.app') 

@section('content')

<div class="container">
    <a href="/home" class="btn btn-outline-secondary">Ga terug naar home</a>

    <br><br>
    
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Alle Studenten</div>

                <div class="card-body">
                        @if(count($students) > 0)

                        <table class="table table-borderd table-hover">
                            <thead class="table-primary">
                                <tr class="active">
                                    <th><h4>Actie</h4></th>
                                    <th><h4>Naam</h4></th>
                                    <th><h4>Studentnummer</h4></th>
                                </tr>
                            </thead>

                            @foreach ($students as $student)
                            <tbody>
                                <tr>
                                    <td><a class="btn btn-outline-success" href="/project/{{$project->id}}/addstudent/{{$student->id}}">Toevoegen</a></td>
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