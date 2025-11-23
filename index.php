<?php
    $isLogin = true;
?>

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
            <a href="#" class="logo"><img src="/Gambar/Logo.png" alt="Logo"></a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="Halaman Lain/Katalog.php">Catalogue</a></li>
                <li><a href="Halaman Lain/aboutus.php">About</a></li>
            </ul>

            <?php if($isLogin): ?>
                <div class="tombol-login">
                    <a href="Halaman Lain/logout.php" class="tombol tombol-garis">Log Out</a>
                </div>
            <?php else:?> 
                <div class="tombol-login">
                    <a href="Halaman Lain/sign-up/index.php" class="tombol tombol-garis">Sign Up</a>
                </div>
            <?php endif?>

            <!-- <button class="menu-toggle" onclick="toggleMenu()">☰</button> -->
        </div>
    </nav>

    <section id="home" class="atas">
        <div class="konten">
            <h1>Perpustakaan Digital</h1>
            <p>Sistem manajemen perpustakaan digital yang memudahkkan akses buku, peminjaman online, dan layanan perpustakaan modern untuk semua</p>
            <div class="tombol-atas">
                <a href="Halaman Lain/Katalog.php" class="tombol tombol-garis tombol-gede">Jelajahi Koleksi</a>
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
                    <h3>Notifikasi Kalender</h3>
                    <p>Tetap terorganisir dengan notifikasi kalender yang mengingatkan anda tentang peminjaman, pengembalian, dan pembaruan aktivitas perpustakaan.</p>
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
                <a href="Halaman Lain/Katalog.php">Katalog</a><br>
                <a href="Halaman Lain/aboutus.html">Tentang</a><br>
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
                <p>Email: info@booking.com</p>
                <p>Telepon: (021) 1234-5678</p>
                <p>Alamat: Jl. Pendidikan No. 123</p>
            </div>
        </div>
    </footer>

    <script src="script/script.js"></script>
</body>
</html>