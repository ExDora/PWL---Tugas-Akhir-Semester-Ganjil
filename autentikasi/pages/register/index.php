<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="../../styles/auth/register.css">
</head>

<body>
    <div class="auth-container">
        <div class="auth-card">
            <h2>Daftar Akun</h2>
            <p class="subtitle">Buat akun baru untuk mulai menggunakan sistem</p>

            <form>
                <div class="form-group">
                    <input type="text" name="name" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Alamat Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Kata Sandi" required>
                </div>
                <div class="form-group">
                    <input type="password" name="confirm" placeholder="Konfirmasi Kata Sandi" required>
                </div>

                <button type="submit" name="register">Daftar Sekarang</button>
            </form>

            <p class="redirect">Sudah punya akun? <a href="../login/index.php">Login di sini</a></p>
        </div>
    </div>
</body>

</html>