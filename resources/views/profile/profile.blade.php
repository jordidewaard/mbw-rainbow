
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center hpBlocks">
            <div class="col-sm-3">
                    <div class="card bg-Blue">
                        <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="240" height="240" viewBox="0 0 24 24"></svg>
                        <div class="card-body">
                            {{ Auth::user()->name }}
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a href="{{ route('login') }}">Login</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </div>
            </div>
        </div>
    </div>

@endsection
