<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Sistem Informasi Surat')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background:#f3f6fb; color:#1e293b; }
        .navbar { background:#172554; }
        .navbar-brand,.nav-link { color:white !important; }
        main { padding-top:35px; padding-bottom:40px; }
        .card { border:0; border-radius:15px; }
        .table th { background:#e8efff; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">ArsipSurat</a>
        <div class="navbar-nav ms-auto flex-row gap-3">
            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            <a class="nav-link" href="{{ route('surat-masuk.index') }}">Surat Masuk</a>
            <a class="nav-link" href="{{ route('surat-keluar.index') }}">Surat Keluar</a>
        </div>
    </div>
</nav>
<main class="container">
    @yield('content')
</main>
<footer class="text-center text-secondary py-3">Sistem Informasi Surat &copy; 2026</footer>
</body>
</html>
