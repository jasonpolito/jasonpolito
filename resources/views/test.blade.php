@extends('_layouts.basic')

@section('content')
    <h1>Testing a <x-gradient-text>sub page.</x-gradient-text></h1>
    <p>
        Return home.
        <x-link href="{{ route('home') }}">Go to Home Page</x-link>
    </p>
@endsection
