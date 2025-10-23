<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../styles/auth/login.css">
</head>

<body>
    <div class="auth-container">
        <div class="auth-card">
            <h2>Selamat Datang</h2>
            <p class="subtitle">Masuk untuk melanjutkan ke dashboard</p>

            <form method="POST" action="../../actions/auth/login.php">
                <div class="form-group">
                    <input type="email" name="email" placeholder="Alamat Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Kata Sandi" required>
                </div>

                <button type="submit" name="login">Masuk Sekarang</button>
            </form>

            <p class="redirect">Belum punya akun? <a href="../register/index.php">Daftar di sini</a></p>
        </div>
    </div>
</body>

</html>