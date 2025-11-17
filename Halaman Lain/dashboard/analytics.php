<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics - Library Management System</title>
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
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <span class="nav-icon">📊</span>
                        <span>Analytics</span>
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
                    <a href="koleksi-buku.php" class="nav-link">
                        <span class="nav-icon">📚</span>
                        <span>Koleksi Buku</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="riwayat.php" class="nav-link">
                        <span class="nav-icon">🕒</span>
                        <span>Riwayat</span>
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
                <h1>Analytics</h1>
                <div class="breadcrumb">
                    <span>🏠 Home</span>
                    <span>/</span>
                    <span>Analytics</span>
                </div>
            </div>
            <div class="header-right">
                <div class="search-box">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" placeholder="Cari data analytics...">
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

        <!-- PERFORMANCE STATS -->
        <section class="stats-grid fade-in">
            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Rata-rata Peminjaman</h3>
                        <div class="stat-value">45.2</div>
                    </div>
                    <div class="stat-icon primary">
                        📈
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 7.2%
                    </span>
                    <span>per hari</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Tingkat Pengembalian</h3>
                        <div class="stat-value">94.5%</div>
                    </div>
                    <div class="stat-icon success">
                        ✅
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 2.1%
                    </span>
                    <span>tepat waktu</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>User Aktif</h3>
                        <div class="stat-value">567</div>
                    </div>
                    <div class="stat-icon warning">
                        👥
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 12.3%
                    </span>
                    <span>bulan ini</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Revenue Denda</h3>
                        <div class="stat-value">Rp 2.5M</div>
                    </div>
                    <div class="stat-icon danger">
                        💰
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change negative">
                        <i class="fas fa-arrow-down"></i> 4.5%
                    </span>
                    <span>dari target</span>
                </div>
            </div>
        </section>

        <!-- DETAILED CHARTS -->
        <section class="charts-container">
            <div class="chart-card" style="grid-column: 1 / -1;">
                <div class="chart-header">
                    <h3>Tren Peminjaman Bulanan</h3>
                    <div class="chart-filter">
                        <select>
                            <option>2025</option>
                            <option>2024</option>
                            <option>2023</option>
                        </select>
                    </div>
                </div>
                <div class="chart-placeholder" style="height: 350px;">
                    📊 Grafik Line Chart - Tren Peminjaman Per Bulan
                </div>
            </div>
        </section>

        <section class="charts-container">
            <div class="chart-card">
                <div class="chart-header">
                    <h3>Distribusi Kategori Buku</h3>
                    <div class="chart-filter">
                        <select>
                            <option>Semua Waktu</option>
                            <option>Tahun Ini</option>
                            <option>Bulan Ini</option>
                        </select>
                    </div>
                </div>
                <div class="chart-placeholder">
                    🥧 Pie Chart - Distribusi Kategori
                </div>
            </div>

            <div class="chart-card">
                <div class="chart-header">
                    <h3>Peak Hours Peminjaman</h3>
                    <div class="chart-filter">
                        <select>
                            <option>7 Hari Terakhir</option>
                            <option>30 Hari Terakhir</option>
                        </select>
                    </div>
                </div>
                <div class="chart-placeholder">
                    📊 Bar Chart - Jam Sibuk Peminjaman
                </div>
            </div>

            <div class="chart-card">
                <div class="chart-header">
                    <h3>Top 10 Buku Terpopuler</h3>
                    <div class="chart-filter">
                        <select>
                            <option>Bulan Ini</option>
                            <option>3 Bulan Terakhir</option>
                            <option>Tahun Ini</option>
                        </select>
                    </div>
                </div>
                <div class="chart-placeholder">
                    📈 Horizontal Bar - Buku Terpopuler
                </div>
            </div>

            <div class="chart-card">
                <div class="chart-header">
                    <h3>Member Registration Growth</h3>
                    <div class="chart-filter">
                        <select>
                            <option>6 Bulan Terakhir</option>
                            <option>1 Tahun Terakhir</option>
                        </select>
                    </div>
                </div>
                <div class="chart-placeholder">
                    📊 Area Chart - Pertumbuhan Member
                </div>
            </div>
        </section>

        <!-- DETAILED STATS TABLE -->
        <section class="table-container">
            <div class="table-header">
                <h3>Statistik Detail Per Kategori</h3>
                <div class="table-actions">
                    <button class="btn btn-outline btn-sm">
                        <i class="fas fa-download"></i> Export CSV
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i class="fas fa-filter"></i> Filter
                    </button>
                </div>
            </div>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Kategori</th>
                            <th>Total Buku</th>
                            <th>Total Peminjaman</th>
                            <th>Rata-rata Durasi</th>
                            <th>Tingkat Popularitas</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Teknologi</strong></td>
                            <td>284</td>
                            <td>1,245</td>
                            <td>12.5 hari</td>
                            <td><span class="badge badge-success">Sangat Tinggi</span></td>
                            <td><span class="badge badge-success">Aktif</span></td>
                        </tr>
                        <tr>
                            <td><strong>Fiksi</strong></td>
                            <td>412</td>
                            <td>2,187</td>
                            <td>15.2 hari</td>
                            <td><span class="badge badge-success">Sangat Tinggi</span></td>
                            <td><span class="badge badge-success">Aktif</span></td>
                        </tr>
                        <tr>
                            <td><strong>Sejarah</strong></td>
                            <td>156</td>
                            <td>543</td>
                            <td>18.7 hari</td>
                            <td><span class="badge badge-warning">Sedang</span></td>
                            <td><span class="badge badge-success">Aktif</span></td>
                        </tr>
                        <tr>
                            <td><strong>Sains</strong></td>
                            <td>198</td>
                            <td>876</td>
                            <td>14.3 hari</td>
                            <td><span class="badge badge-success">Tinggi</span></td>
                            <td><span class="badge badge-success">Aktif</span></td>
                        </tr>
                        <tr>
                            <td><strong>Bisnis</strong></td>
                            <td>142</td>
                            <td>658</td>
                            <td>11.8 hari</td>
                            <td><span class="badge badge-success">Tinggi</span></td>
                            <td><span class="badge badge-success">Aktif</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
</html>