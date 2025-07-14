@extends('_layouts.basic')

@section('content')
    <x-section>
        <x-prose>
            <h1>Testing static site generation with Laravel.
            </h1>
            <p>
                This is a test page to ensure that the static site generation works correctly with Laravel and Vite.
                <x-link href="{{ route('test') }}">Go to Test Page</x-link>
            </p>
        </x-prose>
    </x-section>
@endsection
