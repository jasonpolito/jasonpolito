@extends('_layouts.basic')

@section('content')
    <h1>Testing static site <span class="text-green-500 dark:text-red-500">generation</span> with Laravel.
    </h1>
    <p>
        This is a test page to ensure that the static site generation works correctly with Laravel and Vite.
        <x-link href="{{ route('test') }}">Go to Test Page</x-link>
    </p>
@endsection
