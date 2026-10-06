<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Little Robot Lab</title>
    </head>
    <body>
        <nav style="background-color: #f0f0f0; padding: 10px;">
            Little Robot Lab |
            <a href="{{ route('home') }}">Home</a> |
            <a href="{{ route('posts.index') }}">Projects</a>
        </nav>

        {{ $slot }}

        <footer style="background-color: #222; color: #fff; padding: 10px;">
            Little Robot Lab · projects for parents and kids
        </footer>
    </body>
</html>