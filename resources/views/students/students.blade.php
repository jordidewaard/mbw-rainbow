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
                                <tr class="active">
                                    <th><h4>Naam</h4></th>
                                    <th><h4>Studentnummer</h4></th>
                                    <th class="text-right"><h4>Aantal Projecten</h4></th>
                                </tr>

                            @foreach ($students as $student)
                                <tr>
                                    <td><a href="/students/view/{{$student->id}}">{{$student->name}}</a></td>
                                    <td>studentnummer</td>
                                    <td><a href="/projects/view"></a>
                                        <div class="row row-fix">
                                            <a href="#" class="badge badge-primary">Numbers</a>
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
    </div>
</div>
@endsection

