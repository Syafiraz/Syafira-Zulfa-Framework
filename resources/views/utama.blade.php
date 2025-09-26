<html>
<head>
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Selamat Datang di Halaman Utama</h1>
    @yield('judul_menu')
    <nav>
        <a href="/barang">Barang</a> |
        <a href="/produk">Produk</a>
    </nav>
    <div class="container">
        @yield('isi_menu')
    </div>
    <p>
        ayo balap well
    </p>
</body>
</html>