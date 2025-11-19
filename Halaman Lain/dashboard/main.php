<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Library Management System</title>
    <link rel="stylesheet" href="../../style/dashboard.css">
</head>
<body>
    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="logo-container">
            <div class="logo">
                <div class="logo-icon">
                    📚
                </div>
                <div class="logo-text">
                    <h2>Book - Ing</h2>
                    <p>Admin Panel</p>
                </div>
            </div>
        </div>

        <nav>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <span class="nav-icon">🏠</span>
                        <span>Dashboard</span>
                    </a>
                </li>
            </ul>

            <div class="nav-section">Manajemen</div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="list-user.php" class="nav-link">
                        <span class="nav-icon">👥</span>
                        <span>List User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="peminjam-buku.php" class="nav-link">
                        <span class="nav-icon">📖</span>
                        <span>Peminjam Buku</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="kategori-buku.php" class="nav-link">
                        <span class="nav-icon">🏷️</span>
                        <span>Kategori Buku</span>
                    </a>
                </li>
            </ul>

            <div class="nav-section">Lainnya</div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="pengaturan.php" class="nav-link">
                        <span class="nav-icon">⚙️</span>
                        <span>Pengaturan</span>
                    </a>
                </li>
            </ul>

            <div class="logout-section">
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link logout">
                            <span class="nav-icon">🚪</span>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">
        <!-- HEADER -->
        <header class="header">
            <div class="header-left">
                <h1>Dashboard</h1>
                <div class="breadcrumb">
                    <span>🏠 Home</span>
                    <span>/</span>
                    <span>Dashboard</span>
                </div>
            </div>
            <div class="header-right">
                <div class="search-box">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" placeholder="Cari buku, user, atau transaksi...">
                </div>
                <button class="notification-btn">
                    🔔
                    <span class="notification-badge">3</span>
                </button>
                <button class="profile-btn">
                    👤
                </button>
            </div>
        </header>

        <!-- STATS CARDS -->
        <section class="stats-grid fade-in">
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Total Buku</h3>
                        <div class="stat-value">1,284</div>
                    </div>
                    <div class="stat-icon primary">
                        📚
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 12%
                    </span>
                    <span>dari bulan lalu</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Buku Dipinjam</h3>
                        <div class="stat-value">342</div>
                    </div>
                    <div class="stat-icon warning">
                        📖
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 8%
                    </span>
                    <span>dari bulan lalu</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Total Member</h3>
                        <div class="stat-value">856</div>
                    </div>
                    <div class="stat-icon success">
                        👥
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 15%
                    </span>
                    <span>dari bulan lalu</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Terlambat</h3>
                        <div class="stat-value">23</div>
                    </div>
                    <div class="stat-icon danger">
                        ⚠️
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change negative">
                        <i class="fas fa-arrow-down"></i> 5%
                    </span>
                    <span>dari bulan lalu</span>
                </div>
            </div>
        </section>

        <!-- CHARTS -->
        <section class="charts-container">
            <div class="chart-card">
                <div class="chart-header">
                    <h3>Statistik Peminjaman</h3>
                    <div class="chart-filter">
                        <select>
                            <option>7 Hari Terakhir</option>
                            <option>30 Hari Terakhir</option>
                            <option>3 Bulan Terakhir</option>
                            <option>1 Tahun Terakhir</option>
                        </select>
                    </div>
                </div>
                <div class="chart-placeholder">
                    📈 Grafik Peminjaman (Integrasi Chart.js)
                </div>
            </div>

            <div class="chart-card">
                <div class="chart-header">
                    <h3>Kategori Populer</h3>
                    <div class="chart-filter">
                        <select>
                            <option>Bulan Ini</option>
                            <option>3 Bulan Terakhir</option>
                            <option>1 Tahun Terakhir</option>
                        </select>
                    </div>
                </div>
                <div class="chart-placeholder">
                    📊 Grafik Kategori (Integrasi Chart.js)
                </div>
            </div>
        </section>

        <!-- RECENT ACTIVITY -->
        <section class="activity-feed">
            <h3 style="margin-bottom: 1.5rem;">Aktivitas Terbaru</h3>
            
            <div class="activity-item">
                <div class="activity-icon primary">
                    📚
                </div>
                <div class="activity-content">
                    <h4>Buku baru ditambahkan</h4>
                    <p>"The Art of Programming" telah ditambahkan ke koleksi</p>
                    <span class="activity-time">5 menit yang lalu</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon success">
                    ✅
                </div>
                <div class="activity-content">
                    <h4>Pengembalian buku</h4>
                    <p>user@example.com mengembalikan "Clean Code"</p>
                    <span class="activity-time">15 menit yang lalu</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon warning">
                    📖
                </div>
                <div class="activity-content">
                    <h4>Peminjaman baru</h4>
                    <p>newuser@example.com meminjam "Design Patterns"</p>
                    <span class="activity-time">1 jam yang lalu</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon danger">
                    ⚠️
                </div>
                <div class="activity-content">
                    <h4>Keterlambatan pengembalian</h4>
                    <p>late@example.com terlambat mengembalikan buku</p>
                    <span class="activity-time">2 jam yang lalu</span>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-icon primary">
                    👤
                </div>
                <div class="activity-content">
                    <h4>Member baru terdaftar</h4>
                    <p>newmember@example.com bergabung sebagai member</p>
                    <span class="activity-time">3 jam yang lalu</span>
                </div>
            </div>
        </section>
    </main>
</body>
</html>