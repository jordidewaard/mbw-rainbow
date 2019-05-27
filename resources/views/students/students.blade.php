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

                        <table class="table table-striped">
                                <tr>
                                    <th><h4>Naam</h4></th>
                                    <th><h4>Studentnummer</h4></th>
                                    <th class="text-right"><h4>Actie</h4></th>
                                </tr>

                            @foreach ($students as $student)
                                <tr>
                                    <td><a href="/students/view/{{$student->id}}">{{$student->name}}</a></td>
                                    <td>studentnummer</td>
                                    <td>
                                        <div class="row row-fix">
                                            <a class="btn btn-outline-success a-fix-table" href="/students/{{$student->id}}/edit">Bewerken</a>
                                            {!!Form::open(['action' => ['StudentsController@destroy', $student->id], 'method' => 'POST'])!!}
                                            @csrf
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Verwijderen', ['class' => 'btn btn-outline-danger'])}}
                                            {!!Form::close()!!}
                                        </div>
                                    </td>
                                </tr> 
                            @endforeach
                        </table> 
                        @else
                        <p>Er is nog geen students</p> 
                    @endif 
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection