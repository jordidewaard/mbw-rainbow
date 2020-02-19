@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="/home" class="btn btn-outline-secondary">Ga terug naar home</a>
        <a href="/add" class="btn btn-outline-primary row-fix">Leraren Toevoegen/Verwijderen</a>

        <br><br>

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Alle Leraren</div>

                    <div class="card-body">
                        @if(count($teachers) > 0)

                            <table class="table table-striped">
                                <tr class="active">
                                    <th><h4>Naam</h4></th>
                                    <th class="text-right"><h4>Projecten</h4></th>
                                </tr>

                                @foreach ($teachers as $teacher)
                                    <tr>
                                        <td><a href="/students/view/{{$teacher->id}}">{{$teacher->name}}</a></td>
                                        <td><a href="/projects/view"></a>
                                            <div class="row row-fix">
                                                <span class="badge badge-primary">{{count($teacher->projects)}}</span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>Er zijn geen leraren</p>
                        @endif
                    </div>
                </div>
                <br>
                <br>
            </div>
            {{ $teachers->links() }}
        </div>
    </div>
@endsection

