<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>
    <a href="{{ route('users', ['id' => 1]) }}">User 1</a>
    <a href="{{ route('users', ['id' => 2]) }}">User 2</a>
    <a href="{{ route('contact') }}">Contact</a>
    <a href="{{ route('about') }}">About</a>
    <a href="{{ route('manage.edit') }}">Manage Edit</a>
    <a href="{{ route('manage.barang') }}">Manage Barang</a>
</body>
</html>