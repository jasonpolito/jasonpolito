@extends('_layouts.basic')

@section('meta_title', 'Home Page - jasonpolito.github.io')
@section('meta_description', 'Welcome to the home page of jasonpolito.github.io. This is a static site generated with
    Laravel and Vite.')

@section('content')
    <h1>Testing static site <x-gradient-text>generation</x-gradient-text> with Laravel.
    </h1>
    <p>
        This is a test page to ensure that the static site generation works correctly with Laravel and Vite.
        <x-link href="{{ route('test') }}">Go to Test Page</x-link>
    </p>
@endsection
