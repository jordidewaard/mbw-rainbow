@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ config('app.name') }}
        @endcomponent
    @endslot


    {{-- Body --}}
    {{ "Hier is je automatisch gegenereerde wachtwoord:" }}
    <br>
    {{ "Klik hieronder om in te loggen op je account" }}
    <br>
    <br>
    {{ config('app.url') }}



    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
