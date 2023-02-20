<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-xl text-center text-white py-4 bg-green-500">Contact Page</h1>

    <x-header/>
</body>
</html>
