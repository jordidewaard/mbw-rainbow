@extends('layouts.app')

@section('content')

<div class="container">
    <a href="/home" class="btn btn-outline-secondary"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>

    <br><br>

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Alle Leraren</div>

                <div class="card-body">
                        @if(count($clients) > 0)

                        <table class="table table-striped">
                                <tr class="active">
                                    <th><h4>Naam</h4></th>
                                    <th class="text-center"><h4>Telefoonnummer</h4></th>
                                    <th class="text-right"><h4>Projecten</h4></th>
                                </tr>

                            @foreach ($clients as $client)
                                <tr>
                                    <td><a href="/students/view/{{$client->id}}">{{$client->name}}</a></td>
                                    <td class="text-center">Telefoonnummer</td>
                                    <td><a href="/projects/view"></a>
                                        <div class="row row-fix">
                                            <span class="badge badge-primary">{{count($client->projects)}}</span>
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
