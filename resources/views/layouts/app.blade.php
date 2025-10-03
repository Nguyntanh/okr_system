<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'My App' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.tsx'])
</head>
<body>
    <div id="react-app"></div> <!-- Root cho Tailadmin -->
    <h1>Hello Laravel!</h1>
</body>
</html>