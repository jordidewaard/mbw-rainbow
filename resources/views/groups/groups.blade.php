@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Alle Groupen</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <a href="/groups/create" class="btn btn-outline-primary">Group Maken</a><br><br>
                    <h4>Alle Groupen</h4>
                        @if(count($groups) > 0)

                        <table class="table table-striped">
                                <tr>
                                    <th>Titel</th>
                                    <th>Datum</th>
                                    <th class="text-right">Actie</th>
                                </tr>

                            @foreach ($groups as $group)
                                <tr>
                                    <td><a href="/groups/view/{{$group->id}}">{{$group->title}}</a></td>
                                    <td>{{$group->created_at}}</td>
                                    <td>
                                        <div class="row row-fix">
                                            <a class="btn btn-outline-success a-fix-table" href="/groups/{{$group->id}}/edit">Edit</a>
                                            {!!Form::open(['action' => ['GroupsController@destroy', $group->id], 'method' => 'POST'])!!}
                                            @csrf
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                                            {!!Form::close()!!}
                                        </div>
                                    </td>
                                </tr> 
                            @endforeach
                        </table> 
                        @else
                        <p>Er is nog geen groupen</p> 
                    @endif 
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection