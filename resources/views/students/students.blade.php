@extends('layouts.app') 

@section('content')

<div class="container">
    <a href="/home" class="btn btn-outline-secondary">Ga terug naar home</a>
    <a href="/add" class="btn btn-outline-primary row-fix">Student Toevoegen/Verwijderen</a>

    <br><br>
    
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Alle Studenten</div>

                <div class="card-body">
                        @if(count($students) > 0)
                        <table class="table table-striped">
                                <tr class="active">
                                    <th><h4>Naam</h4></th>
                                    <th class="text-center"><h4>Studentnummer</h4></th>
                                    <th class="text-right"><h4>Projecten</h4></th>
                                </tr>

                            @foreach ($students as $student)
                                <tr>
                                    <td><a href="/students/view/{{$student->id}}">{{$student->name}}</a></td>
                                    <td class="text-center">studentnummer</td>
                                    <td><a href="/projects/view"></a>
                                        <div class="row row-fix">
                                            <span class="badge badge-primary">{{count($student->projects)}}</span> 
                                        </div>
                                    </td>

                                </tr> 
                            @endforeach
                        </table>
                        @else
                        <p>Er zijn geen studenten</p> 
                    @endif 
                </div>
            </div>
            <br>
        </div>
        {{ $students->links() }}
    </div>
</div>
@endsection

