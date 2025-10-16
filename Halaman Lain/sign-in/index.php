<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book - Ing</title>
    <link rel="icon" href="">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <nav>
        <div class="nav-grup">
            <a href="#" class="logo"><img src="Logo.jpg" alt="Logo"></a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="../Halaman Lain/Katalog.php">Catalogue</a></li>
                <li><a href="#">About</a></li>
            </ul>

            <div class="tombol-login">
                <a href="Halaman Lain/sign-up/index.php" class="tombol tombol-garis">Login</a>
            </div>
            <!-- <button class="menu-toggle" onclick="toggleMenu()">☰</button> -->
        </div>
    </nav>

    <section id="home" class="atas">
        <div class="konten">
            <h1>Perpustakaan Digital</h1>
            <p>Sistem manajemen perpustakaan digital yang memudahkkan akses buku, peminjaman online, dan layanan perpustakaan modern untuk semua</p>
            <div class="tombol-atas">
                <a href="Katalog.html" class="tombol tombol-penuh tombol-gede">Jelajahi Koleksi</a>
                <a href="Signup.html" class="tombol tombol-garis tombol-gede">Bergabung Sekarang</a>
            </div>
        </div>
    </section>

    <section id="fitur" class="fitur">
        <div class="kontainer">
            <h2 class="section-title">Layanan Perpustakaan Digital</h2>
            <div class="fitur-grid">

                <div class="fitur-box">
                    <div class="logo-fitur">📅</div>
                    <h3>Booking Buku</h3>
                    <p>Booking buku favorit anda secara online dan ambil sesuai jadwal yang telah ditentukan. Praktis dan menghemat waktu.</p>
                </div>
                
                <div class="fitur-box">
                    <div class="logo-fitur">📱</div>
                    <h3>Pencarian Cerdas</h3>
                    <p>Cari buku favorit anda secara online dan reservasi buku anda dan pilih tanggalnya. Praktis dan simple mencari buku.</p>
                </div>

                <div class="fitur-box">
                    <div class="logo-fitur">⏰</div>
                    <h3>Reminder Otomatis</h3>
                    <p>Dapatkan nontifikasi otomatis untuk tanggal pengembalian, perpanjangan, dan update status booking anda.</p>
                </div>

                <div class="fitur-box">
                    <div class="logo-fitur">📊</div>
                    <h3>Dashboard Admin</h3>
                    <p>Panel kontrol lengkap untuk pustakawan mengelola koleksi, anggota, dan statistik perpustakaan.</p>
                </div>

                <div class="fitur-box">
                    <div class="logo-fitur">📖</div>
                    <h3>Katalog Online</h3>
                    <p>Jelajahi ribuah koleksi buku dengan sistem pencarian yang canggih da filter berdasarkan kategori, penulis, atau tahun terbit.</p>
                </div>

                <div class="fitur-box">
                    <div class="logo-fitur">📱</div>
                    <h3>lorem ipsum</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi illo eveniet totam neque. Voluptatum, et vitae natus quis, distinctio culpa eum cupiditate animi voluptate non provident, eos harum officiis laboriosam.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>LibraryHub</h3>
                <p>Platform perpustakaan digital yang memudahkan akses informasi untuk semua kalangan.</p>
            </div>
            <div class="footer-section">
                <h3>Menu</h3>
                <a href="#home">Beranda</a><br>
                <a href="catalogue.html">Katalog</a><br>
                <a href="about.html">Tentang</a><br>
                <a href="#contact">Kontak</a>
            </div>
            <div class="footer-section">
                <h3>Layanan</h3>
                <a href="#">Booking Buku</a><br>
                <a href="#">Perpanjangan</a><br>
                <a href="#">Bantuan</a><br>
                <a href="#">FAQ</a>
            </div>
            <div class="footer-section">
                <h3>Kontak</h3>
                <p>Email: info@libraryhub.com</p>
                <p>Telepon: (021) 1234-5678</p>
                <p>Alamat: Jl. Pendidikan No. 123</p>
            </div>
        </div>
    </footer>

    <script src="script/script.js"></script>
</body>
</html>
=======
session_start();
include 'db-connect.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION["user"] = $username;
        $success = true;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 360px;
            background: #fff;
            padding: 35px 40px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: left;
            margin-bottom: 25px;
            font-weight: 700;
            font-size: 28px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1.5px solid #ddd;
            border-radius: 10px;
            margin-bottom: 15px;
            outline: none;
            font-size: 15px;
        }

        input:focus {
            border-color: #000;
        }

        .remember-me {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .remember-me a {
            color: #000;
            text-decoration: none;
        }

        .remember-me a:hover {
            text-decoration: underline;
        }

        button {
            width: 100%;
            background-color: #000;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #333;
        }

        .or {
            text-align: center;
            margin: 20px 0;
            font-size: 14px;
            color: #888;
        }

        .social-btn {
            width: 100%;
            border: 1.5px solid #ddd;
            border-radius: 10px;
            padding: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            background: white;
            font-size: 15px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .social-btn img {
            width: 20px;
            height: 20px;
        }

        .bottom-text {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .bottom-text a {
            color: #000;
            text-decoration: none;
        }

        .bottom-text a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }

        .success {
            color: green;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <form method="POST" action="">
        <div class="container">
            <h2>Log in</h2>

            <?php 
            if ($error != "") echo "<p class='error'>$error</p>";
            if (isset($success) && $success) echo "<p class='success'>Login berhasil! Selamat datang, $username 👋</p>";
            ?>

            <input type="text" name="username" placeholder="Email or username" required>
            <input type="password" name="password" placeholder="Password" required>

            <div class="remember-me">
                <label><input type="checkbox" name="remember"> Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit">Continue</button>

            <div class="or">Or</div>

            <div class="social-btn">
                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/google.svg" alt="Google">
                Continue with Google
            </div>

            <div class="social-btn">
                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/facebook.svg" alt="Facebook">
                Continue with Facebook
            </div>

            <div class="bottom-text">
                Don’t have an account? <a href="#">Create your account</a>
            </div>
        </div>
    </form>
</body>
</html>
>>>>>>> 7027522 (Main)
