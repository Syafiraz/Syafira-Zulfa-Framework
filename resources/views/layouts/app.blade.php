<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyek UTS</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; }
        header { background-color: #f1f1f1; padding: 20px; text-align: center; border-bottom: 1px solid #ccc; }
        main { padding: 20px; min-height: 70vh; }
        footer { background-color: #333; color: white; padding: 15px; text-align: center; }
    </style>
</head>
<body>

    <header>
        <h1>HEADER WEBSITE UTS</h1>
    </header>

    <main>
        {{-- Bagian BODY (konten dinamis) akan ditempatkan di sini --}}
        @yield('content')
    </main>

    <footer>
        <p>FOOTER WEBSITE UTS - &copy; 2024</p>
    </footer>

</body>
</html>