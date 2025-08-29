<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routes</title>
    <style>
        body { text-align: center; font-family: Arial; }
        a {
            display: inline-block;
            margin: 5px;
            padding: 8px 15px;
            background: lightblue;
            color: black;
            text-decoration: none;
            border-radius: 4px;
        }
        a:hover { background: deepskyblue; color: white; }
    </style>
</head>
<body>
    <h1>Hello</h1>

    <a href="{{ route('users', ['id' => 1]) }}">User 1</a>
    <a href="{{ route('contact') }}">Contact</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('manage.edit') }}">Manage Edit</a>
    <a href="{{ route('manage.barang') }}">Manage Barang</a>
</body>
</html>
