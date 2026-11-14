<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Perpustakaan Aksara</title>
    <link href="assets/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
</head>
<body class="halaman-login">
<main class="container">
    <div class="kotak-login">
        <div class="judul-situs mb-1">Perpustakaan Aksara</div>
        <p class="text-secondary mb-4">Masuk untuk meminjam atau mengelola koleksi.</p>

        <form action="dashboard.php">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input class="form-control" type="text" autofocus>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control" type="password">
            </div>
            <button class="btn btn-primary w-100" type="submit">Masuk</button>
        </form>
    </div>
</main>
</body>
</html>
