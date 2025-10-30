<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Buku - Library Management System</title>
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
                    <a href="koleksi-buku.php" class="nav-link active">
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
                <h1>Koleksi Buku</h1>
                <div class="breadcrumb">
                    <span>🏠 Home</span>
                    <span>/</span>
                    <span>Manajemen</span>
                    <span>/</span>
                    <span>Koleksi Buku</span>
                </div>
            </div>
            <div class="header-right">
                <div class="search-box">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" placeholder="Cari judul, penulis, ISBN...">
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
                        <h3>Total Koleksi</h3>
                        <div class="stat-value">1,284</div>
                    </div>
                    <div class="stat-icon primary">
                        📚
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 42
                    </span>
                    <span>buku baru</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Tersedia</h3>
                        <div class="stat-value">942</div>
                    </div>
                    <div class="stat-icon success">
                        ✅
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 73%
                    </span>
                    <span>siap dipinjam</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Sedang Dipinjam</h3>
                        <div class="stat-value">342</div>
                    </div>
                    <div class="stat-icon warning">
                        📖
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 27%
                    </span>
                    <span>dari total</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Perlu Perbaikan</h3>
                        <div class="stat-value">8</div>
                    </div>
                    <div class="stat-icon danger">
                        🔧
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change negative">
                        <i class="fas fa-arrow-down"></i> 2
                    </span>
                    <span>butuh maintenance</span>
                </div>
            </div>
        </section>

        <!-- FILTER & VIEW OPTIONS -->
        <section style="background: var(--card-bg); padding: 1.5rem; border-radius: 15px; border: 1px solid var(--border-color); margin-bottom: 2rem;">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <select class="btn btn-outline btn-sm" style="padding: 0.6rem 1.2rem;">
                        <option>Semua Kategori</option>
                        <option>Teknologi</option>
                        <option>Fiksi</option>
                        <option>Sejarah</option>
                        <option>Sains</option>
                        <option>Bisnis</option>
                    </select>
                    <select class="btn btn-outline btn-sm" style="padding: 0.6rem 1.2rem;">
                        <option>Semua Status</option>
                        <option>Tersedia</option>
                        <option>Dipinjam</option>
                        <option>Maintenance</option>
                    </select>
                    <select class="btn btn-outline btn-sm" style="padding: 0.6rem 1.2rem;">
                        <option>Urutkan: Terbaru</option>
                        <option>Judul A-Z</option>
                        <option>Judul Z-A</option>
                        <option>Paling Populer</option>
                    </select>
                </div>
                <div style="display: flex; gap: 1rem;">
                    <button class="btn btn-outline btn-sm">
                        <i class="fas fa-th"></i> Grid
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i class="fas fa-list"></i> List
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Tambah Buku
                    </button>
                </div>
            </div>
        </section>

        <!-- BOOKS GRID -->
        <section class="books-grid">
            <div class="book-card">
                <div class="book-cover">
                    📖
                </div>
                <div class="book-info">
                    <h4>Clean Code</h4>
                    <p class="book-author">Robert C. Martin</p>
                    <div class="book-meta">
                        <span class="badge badge-success">Tersedia</span>
                        <button class="btn btn-sm btn-primary">Detail</button>
                    </div>
                </div>
            </div>

            <div class="book-card">
                <div class="book-cover" style="background: linear-gradient(135deg, #10b981, #059669);">
                    📖
                </div>
                <div class="book-info">
                    <h4>Design Patterns</h4>
                    <p class="book-author">Gang of Four</p>
                    <div class="book-meta">
                        <span class="badge badge-warning">Dipinjam</span>
                        <button class="btn btn-sm btn-primary">Detail</button>
                    </div>
                </div>
            </div>

            <div class="book-card">
                <div class="book-cover" style="background: linear-gradient(135deg, #f59e0b, #d97706);">
                    📖
                </div>
                <div class="book-info">
                    <h4>The Pragmatic Programmer</h4>
                    <p class="book-author">Andrew Hunt</p>
                    <div class="book-meta">
                        <span class="badge badge-success">Tersedia</span>
                        <button class="btn btn-sm btn-primary">Detail</button>
                    </div>
                </div>
            </div>

            <div class="book-card">
                <div class="book-cover" style="background: linear-gradient(135deg, #8b5cf6, #7c3aed);">
                    📖
                </div>
                <div class="book-info">
                    <h4>Refactoring</h4>
                    <p class="book-author">Martin Fowler</p>
                    <div class="book-meta">
                        <span class="badge badge-success">Tersedia</span>
                        <button class="btn btn-sm btn-primary">Detail</button>
                    </div>
                </div>
            </div>

            <div class="book-card">
                <div class="book-cover" style="background: linear-gradient(135deg, #ef4444, #dc2626);">
                    📖
                </div>
                <div class="book-info">
                    <h4>Code Complete</h4>
                    <p class="book-author">Steve McConnell</p>
                    <div class="book-meta">
                        <span class="badge badge-warning">Dipinjam</span>
                        <button class="btn btn-sm btn-primary">Detail</button>
                    </div>
                </div>
            </div>

            <div class="book-card">
                <div class="book-cover" style="background: linear-gradient(135deg, #14b8a6, #0d9488);">
                    📖
                </div>
                <div class="book-info">
                    <h4>The Art of Computer Programming</h4>
                    <p class="book-author">Donald Knuth</p>
                    <div class="book-meta">
                        <span class="badge badge-success">Tersedia</span>
                        <button class="btn btn-sm btn-primary">Detail</button>
                    </div>
                </div>
            </div>

            <div class="book-card">
                <div class="book-cover" style="background: linear-gradient(135deg, #06b6d4, #0891b2);">
                    📖
                </div>
                <div class="book-info">
                    <h4>Introduction to Algorithms</h4>
                    <p class="book-author">Thomas H. Cormen</p>
                    <div class="book-meta">
                        <span class="badge badge-success">Tersedia</span>
                        <button class="btn btn-sm btn-primary">Detail</button>
                    </div>
                </div>
            </div>

            <div class="book-card">
                <div class="book-cover" style="background: linear-gradient(135deg, #ec4899, #db2777);">
                    📖
                </div>
                <div class="book-info">
                    <h4>Head First Design Patterns</h4>
                    <p class="book-author">Eric Freeman</p>
                    <div class="book-meta">
                        <span class="badge badge-danger">Maintenance</span>
                        <button class="btn btn-sm btn-primary">Detail</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- PAGINATION -->
        <section style="background: var(--card-bg); padding: 1.5rem; border-radius: 15px; border: 1px solid var(--border-color); margin-top: 2rem;">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                <div class="pagination-info">
                    Menampilkan <strong>1-8</strong> dari <strong>1,284</strong> buku
                </div>
                <div class="pagination-buttons">
                    <button class="pagination-btn" disabled>
                        <i class="fas fa-chevron-left"></i> Previous
                    </button>
                    <button class="pagination-btn active">1</button>
                    <button class="pagination-btn">2</button>
                    <button class="pagination-btn">3</button>
                    <button class="pagination-btn">...</button>
                    <button class="pagination-btn">161</button>
                    <button class="pagination-btn">
                        Next <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </section>
    </main>
</body>
</html>