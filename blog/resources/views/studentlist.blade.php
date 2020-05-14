<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
    </head>
    <body>
        <h2>Students:</h2>
        @foreach ($folder[$folderId-1]->students as $student)
            <a href="../subjectlist/{{$student->id}}">{{$student->id}}.{{$student->name}} {{$student->surname}}</a><br>
        @endforeach
    </body>
</html>
