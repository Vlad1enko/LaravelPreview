<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
    </head>
    <body>
        Main page
        <form action="/create" method="post">
            <input type="text" name="message" placeholder="Enter message: ">
            <button type="submit">Submit</button>
            {{ csrf_field() }}
        </form>
        Messages:
        <ul>
            @yield('messages')
        </ul>
    </body>
</html>
