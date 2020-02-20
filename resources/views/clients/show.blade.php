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
                                    <td class="text-center">{{$hour->updated_at}}</td>
                                    <td>
                                		@if (Auth::user()->role == 'C')
                                			@if($hour->status == 'requested')
                                			    <div class="row row-fix">
                                			    	<form method="POST" action="/hours/acceptHours/{{ $hour->hour_id }}/{{ $hour->hours }}">
                                			    		@csrf
                                			        	<button class="btn btn-outline-success a-fix-table"><i class="fa fa-check-circle" aria-hidden="true"></i></button>
                                			    	</form>
                                			    	<form method="POST" action="/hours/rejectHours/{{ $hour->hour_id }}/{{ $hour->hours }}">
                                			    		@csrf
                                			        	<button class='btn btn-outline-danger'><i class="fa fa-minus-circle" aria-hidden="true"></i></button>
                                			        </form>
                                			    </div>
                                			@else
                                				<div class="row row-fix">
                                					<button class='btn btn-outline-secondary' onclick="javascript:void(0)">{{ $hour->status }}</button></div>
                                			@endif
                                		@elseif (Auth::user() && Auth::user()->role == 'A')
                                			<div class="row row-fix">
                                				<button class='btn btn-outline-secondary' onclick="javascript:void(0)">{{ $hour->status }}</button></div>
                                		@endif
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