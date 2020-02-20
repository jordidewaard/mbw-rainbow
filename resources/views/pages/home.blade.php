@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center hpBlocks">
        @if (Auth::user() && (Auth::user()->role == 'S' || Auth::user() && Auth::user()->role == 'A'))
        <div class="col-sm-3">
            <a href="/projects">
                <div class="card bg-Green">
                  <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="240" height="240" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                  <div class="card-body">
                    Projecten
                  </div>
                </div>
            </a>
        </div>
        <div class="col-sm-3">
            <a href="/groups">
                <div class="card bg-Yellow">
                  <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="240" height="240" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                  <div class="card-body">
                    Groepen
                  </div>
                </div>
            </a>
        </div>
        @endif
        @if (Auth::user() && Auth::user()->role == 'S')
        <div class="col-sm-3">
            <a href="/overview/{{ Auth::user()->id }}">
                <div class="card bg-Purple">
                    <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="240" height="240" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
                    <div class="card-body">
                        Overzicht
                    </div>
                </div>
            </a>
        </div>
        @endif
    </div>
    @if (Auth::user() && Auth::user()->role == 'A')
    <div class="row justify-content-center hpBlocks">
        <div class="col-sm-3">
            <a href="/teachers">
                <div class="card bg-Red">
                  <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="240" height="240" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                  <div class="card-body">
                    Leraren
                  </div>
                </div>
            </a>
        </div>
        <div class="col-sm-3">
            <a href="/students">
                <div class="card bg-Purple">
                  <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="240" height="240" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
                  <div class="card-body">
                    Studenten
                  </div>
                </div>
            </a>
        </div>
        @if (Auth::user() && Auth::user()->role == 'A')
        <div class="col-sm-3">
            <a href="/clients">
                <div class="card bg-Blue">
                  <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="240" height="240" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0zm10 5h4v2h-4zm0 0h4v2h-4z"/><path d="M10 16v-1H3.01L3 19c0 1.11.89 2 2 2h14c1.11 0 2-.89 2-2v-4h-7v1h-4zm10-9h-4.01V5l-2-2h-4l-2 2v2H4c-1.1 0-2 .9-2 2v3c0 1.11.89 2 2 2h6v-2h4v2h6c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-6 0h-4V5h4v2z"/></svg>
                  <div class="card-body">
                    Projectbegeleiders
                  </div>
                </div>
            </a>
        </div>
        @endif

    </div>
    @endif
    @if (Auth::user() && Auth::user()->role == 'C')
      <div class="row justify-content-center hpBlocks">
        <div class="col-sm-3">
            <a href="/clients/view/{{ Auth::user()->id }}">
                <div class="card bg-Blue">
                  <svg class="card-img-top" xmlns="http://www.w3.org/2000/svg" width="240" height="240" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0zm10 5h4v2h-4zm0 0h4v2h-4z"/><path d="M10 16v-1H3.01L3 19c0 1.11.89 2 2 2h14c1.11 0 2-.89 2-2v-4h-7v1h-4zm10-9h-4.01V5l-2-2h-4l-2 2v2H4c-1.1 0-2 .9-2 2v3c0 1.11.89 2 2 2h6v-2h4v2h6c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-6 0h-4V5h4v2z"/></svg>
                  <div class="card-body">
                    Projectbegeleiders
                  </div>
                </div>
            </a>
        </div>
      </div>
    @endif
</div>
@endsection
