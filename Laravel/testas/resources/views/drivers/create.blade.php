<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>New Radar</title>
    </head>
    <body>
        <h1>New Driver</h1>

        <form method="post" action="{{ url("drivers") }}">
            {{ csrf_field() }}
            <input name="name" placeholder="name">
            <input name="city" placeholder="city">
            <button type="submit">Save</button>
        </form>

    </body>
</html>