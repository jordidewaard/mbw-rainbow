@extends('layouts.app')

@section('content')

<div class="container">
    <a href="/projects/view/{{$project->id}}" class="btn btn-outline-secondary"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>

    <br><br>

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">{{$project->title}}</div>

                <div class="card-body">
                        @if(count($students) > 0)

                        <table class="table table-striped">
                                <tr class="active">
                                    <th><h4>Naam</h4></th>
                                    <th class="text-center"><h4>Studentnummer</h4></th>
                                    <th class="text-right"><h4>Actie</h4></th>
                                </tr>

                            @foreach ($students as $student)
                                <tr>
                                    <td><a href="/students/view/{{$student->id}}">{{$student->name}}</a></td>
                                    <td class="text-center">studentnummer</td>
                                    <td><a href="/projects/view"></a>
                                        <div class="row row-fix">
                                                <a class="btn btn-outline-success a-fix-table" href="/project/{{$project->id}}/addstudent/{{$student->id}}"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
                                                <a class="btn btn-outline-danger" href="/project/{{$project->id}}/deletestudent/{{$student->id}}"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
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