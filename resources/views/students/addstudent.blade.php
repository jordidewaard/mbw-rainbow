@extends('layouts.app')

@section('content')

<div class="container">

    <div class="d-flex">
      <a href="/projects/view/{{$project->id}}" class="btn btn-outline-secondary" style="height: 37px;"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
      <div class="ml-3">
        <h4 class="mb-0">{{$project->title}}</h4>
        <small>Geschreven op {{$project->created_at->format('d/m/Y')}}</small>
      </div>
    </div>

    <br>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Selecteer studenten om toe te voegen</div>

                <div class="card-body">
                        @if(count($students) > 0)

                        <table class="table table-striped">
                                <tr class="active">
                                    <th>Naam</th>
                                    <th class="text-center">Studentnummer</th>
                                    <th class="text-right">Actie</th>
                                </tr>

                            @foreach ($students as $student)
                                <tr>
                                    <td><a href="/students/view/{{$student->id}}">{{$student->name}}</a></td>
                                    <td class="text-center">studentnummer</td>
                                    <td><a href="/projects/view"></a>
                                        <div class="row row-fix">
                                                <a class="btn btn-outline-success a-fix-table" href="/project/{{$project->id}}/addstudent/{{$student->id}}"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
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

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Huidige studenten in het project</div>

                <div class="card-body">
                        @if(count($students_joined) > 0)

                        <table class="table table-striped">
                                <tr class="active">
                                    <th>Naam</th>
                                    <th class="text-center">Studentnummer</th>
                                    <th class="text-right">Actie</th>
                                </tr>

                            @foreach ($students_joined as $student)
                                <tr>
                                    <td><a href="/students/view/{{$student->id}}">{{$student->name}}</a></td>
                                    <td class="text-center">studentnummer</td>
                                    <td><a href="/projects/view"></a>
                                        <div class="row row-fix">
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
