<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../styles/dashboard/index.css">
</head>

<body>
    <header class="topbar">
        <h2 class="logo">MyApp</h2>
        <nav>
            <a href="#">Dashboard</a>
            <a href="#">Profil</a>
            <a href="#">Pengaturan</a>
            <a href="../../actions/auth/logout.php" class="logout">Logout</a>
        </nav>
    </header>

    <main class="content">
        <section class="welcome">
            <h1>Selamat Datang 👋</h1>
            <p>Hai, <strong>Nama Pengguna</strong>! Senang melihatmu kembali.</p>
        </section>

        <section class="cards">
            <div class="card">
                <h3>Total Pengguna</h3>
                <p>124</p>
            </div>
            <div class="card">
                <h3>Transaksi Hari Ini</h3>
                <p>58</p>
            </div>
            <div class="card">
                <h3>Pesan Baru</h3>
                <p>12</p>
            </div>
        </section>

        <section class="overview">
            <div class="overview-card">
                <h2>Ringkasan Aktivitas</h2>
                <p>
                    Ini adalah tampilan utama setelah login. Kamu bisa menambahkan data,
                    melihat laporan, atau mengatur sistem dari sini.
                </p>
                <button>Mulai Sekarang</button>
            </div>
        </section>
    </main>
</body>

</html>