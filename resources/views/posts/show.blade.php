<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
 

<ul>

    <li>{{ $id }}</li>
    <li>{{ $name }}</li>
    <li>{{ $body }}</li>
    <li>{{ $title }}</li>
</ul>

    </body>
</html>
