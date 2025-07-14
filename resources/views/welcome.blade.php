<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jason Polito</title>
    <meta name="description" content="">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <x-section>
        <x-prose>
            <h1>Testing static site generation with Laravel.
            </h1>
            <p>
                This is a test page to ensure that the static site generation works correctly with Laravel and Vite.
                <x-link href="{{ route('test') }}">Go to Test Page</x-link>
        </x-prose>
        </h1>
    </x-section>
</body>

</html>
