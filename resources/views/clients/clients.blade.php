@extends('layouts.app')

@section('content')

    <div class="container">
        <a href="/home" class="btn btn-outline-secondary">Ga terug naar home</a>

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
                                    <th class="text-right"><h4>Projecten</h4></th>
                                </tr>

                                @foreach ($clients as $client)
                                    <tr>
                                        <td><a href="/clients/view/{{$client->id}}">{{$client->name}}</a></td>
                                        <td><a href="/projects/view"></a>
                                            <div class="row row-fix">
                                                <span class="badge badge-primary">
                                                	<?php $i = 0; ?>
                                                	@foreach ($projects as $project)
                                                		@if($project == $client['id'])
                                                			<?php $i++; ?>
                                                		@endif
                                                	@endforeach
                                                	{{ $i }}
                                            	</span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>Er zijn geen projectbegeleiders</p>
                        @endif
                    </div>
                </div>
                <br>
                <br>
            </div>
            {{ $clients->links() }}
        </div>
    </div>
@endsection