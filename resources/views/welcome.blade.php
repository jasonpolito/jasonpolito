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
        <h1 class="text-4xl font-bold">Testing static site generation with Laravel.</h1>
    </x-section>
</body>

</html>
