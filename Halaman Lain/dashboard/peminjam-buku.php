

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjam Buku - Library Management System</title>
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
                    <a href="main.php" class="nav-link">
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
                        <span>List User</span>a
                    </a>
                </li>
                <li class="nav-item">
                    <a href="peminjam-buku.php" class="nav-link active">
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
                <h1>Peminjam Buku</h1>
                <div class="breadcrumb">
                    <span>🏠 Home</span>
                    <span>/</span>
                    <span>Manajemen</span>
                    <span>/</span>
                    <span>Peminjam Buku</span>
                </div>
            </div>
            <div class="header-right">
                <div class="search-box">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" placeholder="Cari peminjam atau buku...">
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

        <!-- STATS -->
        <section class="stats-grid fade-in">
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Total Peminjaman</h3>
                        <div class="stat-value">342</div>
                    </div>
                    <div class="stat-icon primary">
                        📖
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 8%
                    </span>
                    <span>sedang dipinjam</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Jatuh Tempo Hari Ini</h3>
                        <div class="stat-value">15</div>
                    </div>
                    <div class="stat-icon warning">
                        ⏰
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 5
                    </span>
                    <span>butuh perhatian</span>
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
                        <i class="fas fa-arrow-down"></i> 3
                    </span>
                    <span>perlu tindakan</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Dikembalikan Hari Ini</h3>
                        <div class="stat-value">12</div>
                    </div>
                    <div class="stat-icon success">
                        ✅
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 4
                    </span>
                    <span>pengembalian hari ini</span>
                </div>
            </div>
        </section>

        <!-- BORROWER TABLE -->
        <section class="table-container">
            <div class="table-header">
                <h3>Daftar Peminjaman Aktif</h3>
                <div class="table-actions">
                    <button class="btn btn-outline btn-sm">
                        <i class="fas fa-filter"></i> Filter Status
                    </button>
                    <button class="btn btn-outline btn-sm">
                        <i class="fas fa-calendar"></i> Filter Tanggal
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Tambah Peminjaman
                    </button>
                </div>
            </div>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Email Peminjam</th>
                            <th>No. Telepon</th>
                            <th>Buku yang Dipinjam</th>
                            <th>Tanggal Pinjam</th>
                            <th>Batas Waktu</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Data akan diisi dari backend -->
                        <!-- Contoh struktur kosong untuk backend integration -->
                    </tbody>
                </table>
            </div>
            <div class="table-pagination">
                <div class="pagination-info">
                    Menampilkan <strong>1-10</strong> dari <strong>342</strong> peminjaman
                </div>
                <div class="pagination-buttons">
                    <?php if ($currentPage > 1): ?>
                        <a href="?page=<?= $currentPage -1?>">
                            <button class="pagination-btn">
                            <i class="fas fa-chevron-left"></i> Previous
                            </button>
                        </a>
                    <?php endif; ?>

                    <?php if ($currentPage < $totalPages): ?>
                        <a href="?page=<?= $currentPage + 1?>">
                            <button class="pagination-btn">
                            Next <i class="fas fa-chevron-right"></i>
                            </button>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- QUICK ACTION CARDS -->
        <section style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
            <div class="stat-card" style="cursor: pointer;">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Kirim Pengingat</h3>
                        <p style="color: var(--text-secondary); font-size: 0.85rem; margin-top: 0.5rem;">
                            Kirim email pengingat ke semua peminjam yang jatuh tempo hari ini
                        </p>
                    </div>
                    <div class="stat-icon warning">
                        📧
                    </div>
                </div>
            </div>

            <div class="stat-card" style="cursor: pointer;">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Laporan Keterlambatan</h3>
                        <p style="color: var(--text-secondary); font-size: 0.85rem; margin-top: 0.5rem;">
                            Generate laporan lengkap untuk semua keterlambatan
                        </p>
                    </div>
                    <div class="stat-icon danger">
                        📋
                    </div>
                </div>
            </div>

            <div class="stat-card" style="cursor: pointer;">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Perpanjang Otomatis</h3>
                        <p style="color: var(--text-secondary); font-size: 0.85rem; margin-top: 0.5rem;">
                            Atur perpanjangan otomatis untuk peminjaman tertentu
                        </p>
                    </div>
                    <div class="stat-icon success">
                        🔄
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>