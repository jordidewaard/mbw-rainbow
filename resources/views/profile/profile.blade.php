<style>
    .centering {
        text-align: center;
    }
</style>
@extends('layouts.app')

@section('content')
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <div class="container centering">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profiel</div>
                    <div class="card-body">
                        <i class="fa fa-user"></i> Naam: {{ Auth::user()->name }}
                    <br>
                        <i class="fa fa-envelope-square"></i> Email: {{ Auth::user()->email }}
                    <br><br>
                        <b>Projecten:</b>
                    <br>
                        <i class="">@foreach( Auth::user()->projects as $project )<li><a href="{{ $project->link }}">{{ $project->title }}</a></li> @endforeach</i>
                    <br>
                        <br>
                        <a class="linksonprofile" href="/changepassword">
                           Wachtwoord veranderen
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection
