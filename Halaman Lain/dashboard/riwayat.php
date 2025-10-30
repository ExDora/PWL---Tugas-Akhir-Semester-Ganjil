<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat - Library Management System</title>
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
                    <h2>LibraryMS</h2>
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
                    <a href="analytics.php" class="nav-link">
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
                    <a href="riwayat.php" class="nav-link active">
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
                <h1>Riwayat Transaksi</h1>
                <div class="breadcrumb">
                    <span>🏠 Home</span>
                    <span>/</span>
                    <span>Manajemen</span>
                    <span>/</span>
                    <span>Riwayat</span>
                </div>
            </div>
            <div class="header-right">
                <div class="search-box">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" placeholder="Cari transaksi...">
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
                        <h3>Total Transaksi</h3>
                        <div class="stat-value">5,842</div>
                    </div>
                    <div class="stat-icon primary">
                        📋
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 245
                    </span>
                    <span>bulan ini</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Selesai</h3>
                        <div class="stat-value">5,387</div>
                    </div>
                    <div class="stat-icon success">
                        ✅
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 92%
                    </span>
                    <span>tingkat keberhasilan</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Terlambat</h3>
                        <div class="stat-value">312</div>
                    </div>
                    <div class="stat-icon warning">
                        ⏰
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change negative">
                        <i class="fas fa-arrow-down"></i> 5.3%
                    </span>
                    <span>dari total</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Total Denda</h3>
                        <div class="stat-value">Rp 12.5M</div>
                    </div>
                    <div class="stat-icon danger">
                        💰
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 8%
                    </span>
                    <span>dari bulan lalu</span>
                </div>
            </div>
        </section>

        <!-- FILTER OPTIONS -->
        <section style="background: var(--card-bg); padding: 1.5rem; border-radius: 15px; border: 1px solid var(--border-color); margin-bottom: 2rem;">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <input type="date" class="btn btn-outline btn-sm" style="padding: 0.6rem 1.2rem;">
                    <span style="display: flex; align-items: center; color: var(--text-secondary);">-</span>
                    <input type="date" class="btn btn-outline btn-sm" style="padding: 0.6rem 1.2rem;">
                    <select class="btn btn-outline btn-sm" style="padding: 0.6rem 1.2rem;">
                        <option>Semua Status</option>
                        <option>Selesai</option>
                        <option>Terlambat</option>
                        <option>Sedang Berlangsung</option>
                    </select>
                </div>
                <div style="display: flex; gap: 1rem;">
                    <button class="btn btn-outline btn-sm">
                        <i class="fas fa-filter"></i> Apply Filter
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i class="fas fa-download"></i> Export
                    </button>
                </div>
            </div>
        </section>

        <!-- HISTORY TABLE -->
        <section class="table-container">
            <div class="table-header">
                <h3>Riwayat Peminjaman</h3>
                <div class="table-actions">
                    <button class="btn btn-outline btn-sm">
                        <i class="fas fa-print"></i> Print
                    </button>
                    <button class="btn btn-outline btn-sm">
                        <i class="fas fa-file-excel"></i> Excel
                    </button>
                </div>
            </div>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>ID Transaksi</th>
                            <th>Email User</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Status</th>
                            <th>Denda</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>#TRX-2025-001</strong></td>
                            <td>user1@example.com</td>
                            <td>Clean Code</td>
                            <td>15 Okt 2025</td>
                            <td>22 Okt 2025</td>
                            <td><span class="badge badge-success">Selesai</span></td>
                            <td>-</td>
                            <td>
                                <button class="btn btn-sm btn-outline">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#TRX-2025-002</strong></td>
                            <td>user2@example.com</td>
                            <td>Design Patterns</td>
                            <td>18 Okt 2025</td>
                            <td>28 Okt 2025</td>
                            <td><span class="badge badge-warning">Terlambat 2 hari</span></td>
                            <td>Rp 10,000</td>
                            <td>
                                <button class="btn btn-sm btn-outline">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#TRX-2025-003</strong></td>
                            <td>user3@example.com</td>
                            <td>The Pragmatic Programmer</td>
                            <td>20 Okt 2025</td>
                            <td>25 Okt 2025</td>
                            <td><span class="badge badge-success">Selesai</span></td>
                            <td>-</td>
                            <td>
                                <button class="btn btn-sm btn-outline">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#TRX-2025-004</strong></td>
                            <td>user4@example.com</td>
                            <td>Refactoring</td>
                            <td>22 Okt 2025</td>
                            <td>-</td>
                            <td><span class="badge badge-primary">Berlangsung</span></td>
                            <td>-</td>
                            <td>
                                <button class="btn btn-sm btn-outline">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>#TRX-2025-005</strong></td>
                            <td>user5@example.com</td>
                            <td>Code Complete</td>
                            <td>23 Okt 2025</td>
                            <td>29 Okt 2025</td>
                            <td><span class="badge badge-success">Selesai</span></td>
                            <td>-</td>
                            <td>
                                <button class="btn btn-sm btn-outline">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-pagination">
                <div class="pagination-info">
                    Menampilkan <strong>1-5</strong> dari <strong>5,842</strong> transaksi
                </div>
                <div class="pagination-buttons">
                    <button class="pagination-btn" disabled>
                        <i class="fas fa-chevron-left"></i> Previous
                    </button>
                    <button class="pagination-btn active">1</button>
                    <button class="pagination-btn">2</button>
                    <button class="pagination-btn">3</button>
                    <button class="pagination-btn">...</button>
                    <button class="pagination-btn">1169</button>
                    <button class="pagination-btn">
                        Next <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </section>
    </main>
</body>
</html>