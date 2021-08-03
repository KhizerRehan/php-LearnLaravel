<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body class="antialiased">
<div>
    <h1>Form As POST</h1>
    <form method="post" action="formSubmitByPOST">
        {{csrf_field()}}
        <input type="text" name="name" />
        <input type="submit" name="submit" />
    </form>


    <h1>Form As GET</h1>
    <form method="get" action="formSubmitByGET">
        {{csrf_field()}}
        <input type="text" name="name" />
        <input type="submit" name="submit" />
    </form>
</div>
</body>
</html>
