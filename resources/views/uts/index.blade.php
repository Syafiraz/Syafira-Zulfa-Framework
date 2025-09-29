@extends('layouts.app')

@section('content')
    <h2>Selamat Datang di Halaman UTS</h2>
    <p>Silakan pilih salah satu menu di bawah ini:</p>
    <ul>
        <li><a href="{{ url('/uts/pemrograman-web') }}">a. Menu uts pemrograman web</a></li>
        <li><a href="{{ url('/uts/database') }}">b. Menu uts database</a></li>
    </ul>
@endsection