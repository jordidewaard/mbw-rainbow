<style>
    .centering {
        text-align: center;
    }

    body {
        font-family: "Nunito", sans-serif; 
    }

</style>
@extends('layouts.app')

@section('content')
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
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
                        <a class="linksonprofile" href="/changepassword">
                           Wachtwoord veranderen
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
