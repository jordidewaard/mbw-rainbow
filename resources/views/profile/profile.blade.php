
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center hpBlocks">
            <div class="col-sm-3">
                    <div class="card bg-Blue">
                        <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="240" height="240" viewBox="0 0 24 24"></svg>
                        <div class="card-body">
                            {{ Auth::user()->name }}
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
