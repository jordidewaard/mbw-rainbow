@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Alle Groepen</div>

                <div class="card-body">
                    <a href="/groups/create" class="btn btn-outline-primary">Groep Maken</a><br><br>
                        @if(count($groups) > 0)

                        <table class="table table-striped">
                                <tr>
                                    <th><h4>Titel</h4></th>
                                    <th><h4>Datum</h4></th>
                                    <th class="text-right"><h4>Actie</h4></th>
                                </tr>

                            @foreach ($groups as $group)
                                <tr>
                                    <td><a href="/groups/view/{{$group->id}}">{{$group->title}}</a></td>
                                    <td>{{$group->created_at}}</td>
                                    <td>
                                        <div class="row row-fix">
                                            <a class="btn btn-outline-success a-fix-table" href="/groups/{{$group->id}}/edit">Bewerken</a>
                                            {!!Form::open(['action' => ['GroupsController@destroy', $group->id], 'method' => 'POST'])!!}
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
                        <p>Er is nog geen groepen</p> 
                    @endif 
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection