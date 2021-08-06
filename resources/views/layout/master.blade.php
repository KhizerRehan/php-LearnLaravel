<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
    </head>
    <body>
    <h1>Master Layout</h1>


    @section('sidebar')
        This is the master sidebar.
    @show


    <div id="container">
        @yield('content')
    </div>
    </body>
</html>
