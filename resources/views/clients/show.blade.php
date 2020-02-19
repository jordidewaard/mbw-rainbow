@extends('layouts.app') 

@section('content')
<div class="container">
    <a href="/home" class="btn btn-outline-secondary">Ga terug naar home</a>

    <br><br>
    
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Alle Uren</div>

                <div class="card-body">
                    @if(count($hours) > 0)
                        <table class="table table-striped">
                                <tr>
                                    <th><h4>Uren</h4></th>
                                    <th>
                                    <th class="text-center"><h4>Datum</h4></th>
									<th>
                                </tr>

                            @foreach ($hours as $hour)
                                <tr>
                                    <td class="text-left">Aangevraagde uren: {{$hour->hours}}</td>
                                    <td>
                                    <td class="text-center">{{$hour->created_at}}</td>
                                    <td>
                                        <div class="row row-fix">
                                            <a class="btn btn-outline-success a-fix-table" href="/hours/{{$hour->hour_id}}/edit"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            <button class='btn btn-outline-danger' onclick="showDeleteForm({{$hour->hour_id}})"><i class="fa fa-minus-circle" aria-hidden="true"></i></button>
                                        </div>
                                    </td>
                                </tr> 
                            @endforeach
                        </table> 
                        @else
                        <p>Er zijn nog geen uren</p> 
                    @endif 
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
@endsection