<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Buku - Library Management System</title>
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
                    <a href="riwayat.php" class="nav-link">
                        <span class="nav-icon">🕒</span>
                        <span>Riwayat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="kategori-buku.php" class="nav-link active">
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
                <h1>Kategori Buku</h1>
                <div class="breadcrumb">
                    <span>🏠 Home</span>
                    <span>/</span>
                    <span>Manajemen</span>
                    <span>/</span>
                    <span>Kategori Buku</span>
                </div>
            </div>
            <div class="header-right">
                <div class="search-box">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" placeholder="Cari kategori...">
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

        <!-- HEADER SECTION -->
        <section style="background: var(--card-bg); padding: 2rem; border-radius: 15px; border: 1px solid var(--border-color); margin-bottom: 2rem;">
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.5rem;">
                <div>
                    <h2 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Manajemen Kategori</h2>
                    <p style="color: var(--text-secondary);">Kelola kategori buku untuk memudahkan organisasi perpustakaan</p>
                </div>
                <button class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Kategori Baru
                </button>
            </div>
        </section>

        <!-- CATEGORY GRID -->
        <section class="category-grid">
            <div class="category-card">
                <div class="category-icon">💻</div>
                <h3 class="category-name">Teknologi</h3>
                <p class="category-count">284 Buku</p>
                <div style="display: flex; gap: 0.5rem; margin-top: 1rem; justify-content: center;">
                    <button class="btn btn-sm btn-outline">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </div>
            </div>

            <div class="category-card">
                <div class="category-icon">📖</div>
                <h3 class="category-name">Fiksi</h3>
                <p class="category-count">412 Buku</p>
                <div style="display: flex; gap: 0.5rem; margin-top: 1rem; justify-content: center;">
                    <button class="btn btn-sm btn-outline">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </div>
            </div>

            <div class="category-card">
                <div class="category-icon">🏛️</div>
                <h3 class="category-name">Sejarah</h3>
                <p class="category-count">156 Buku</p>
                <div style="display: flex; gap: 0.5rem; margin-top: 1rem; justify-content: center;">
                    <button class="btn btn-sm btn-outline">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </div>
            </div>

            <div class="category-card">
                <div class="category-icon">🔬</div>
                <h3 class="category-name">Sains</h3>
                <p class="category-count">198 Buku</p>
                <div style="display: flex; gap: 0.5rem; margin-top: 1rem; justify-content: center;">
                    <button class="btn btn-sm btn-outline">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </div>
            </div>

            <div class="category-card">
                <div class="category-icon">💼</div>
                <h3 class="category-name">Bisnis</h3>
                <p class="category-count">142 Buku</p>
                <div style="display: flex; gap: 0.5rem; margin-top: 1rem; justify-content: center;">
                    <button class="btn btn-sm btn-outline">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </div>
            </div>

            <div class="category-card">
                <div class="category-icon">🎨</div>
                <h3 class="category-name">Seni & Desain</h3>
                <p class="category-count">87 Buku</p>
                <div style="display: flex; gap: 0.5rem; margin-top: 1rem; justify-content: center;">
                    <button class="btn btn-sm btn-outline">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </div>
            </div>

            <div class="category-card">
                <div class="category-icon">🌍</div>
                <h3 class="category-name">Geografi</h3>
                <p class="category-count">64 Buku</p>
                <div style="display: flex; gap: 0.5rem; margin-top: 1rem; justify-content: center;">
                    <button class="btn btn-sm btn-outline">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </div>
            </div>

            <div class="category-card">
                <div class="category-icon">🧠</div>
                <h3 class="category-name">Psikologi</h3>
                <p class="category-count">92 Buku</p>
                <div style="display: flex; gap: 0.5rem; margin-top: 1rem; justify-content: center;">
                    <button class="btn btn-sm btn-outline">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </div>
            </div>

            <div class="category-card">
                <div class="category-icon">📚</div>
                <h3 class="category-name">Pendidikan</h3>
                <p class="category-count">178 Buku</p>
                <div style="display: flex; gap: 0.5rem; margin-top: 1rem; justify-content: center;">
                    <button class="btn btn-sm btn-outline">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </div>
            </div>

            <div class="category-card">
                <div class="category-icon">🍳</div>
                <h3 class="category-name">Kuliner</h3>
                <p class="category-count">45 Buku</p>
                <div style="display: flex; gap: 0.5rem; margin-top: 1rem; justify-content: center;">
                    <button class="btn btn-sm btn-outline">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </div>
            </div>

            <div class="category-card">
                <div class="category-icon">🎭</div>
                <h3 class="category-name">Drama & Teater</h3>
                <p class="category-count">38 Buku</p>
                <div style="display: flex; gap: 0.5rem; margin-top: 1rem; justify-content: center;">
                    <button class="btn btn-sm btn-outline">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </div>
            </div>

            <div class="category-card">
                <div class="category-icon">⚖️</div>
                <h3 class="category-name">Hukum</h3>
                <p class="category-count">71 Buku</p>
                <div style="display: flex; gap: 0.5rem; margin-top: 1rem; justify-content: center;">
                    <button class="btn btn-sm btn-outline">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </div>
            </div>
        </section>

        <!-- DETAILED TABLE VIEW -->
        <section class="table-container" style="margin-top: 3rem;">
            <div class="table-header">
                <h3>Detail Kategori</h3>
                <div class="table-actions">
                    <button class="btn btn-outline btn-sm">
                        <i class="fas fa-filter"></i> Filter
                    </button>
                    <button class="btn btn-outline btn-sm">
                        <i class="fas fa-download"></i> Export
                    </button>
                </div>
            </div>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Kategori</th>
                            <th>Total Buku</th>
                            <th>Buku Tersedia</th>
                            <th>Sedang Dipinjam</th>
                            <th>Popularitas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div style="display: flex; align-items: center; gap: 1rem;">
                                    <span style="font-size: 1.5rem;">💻</span>
                                    <strong>Teknologi</strong>
                                </div>
                            </td>
                            <td>284</td>
                            <td>198</td>
                            <td>86</td>
                            <td><span class="badge badge-success">Sangat Tinggi</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="display: flex; align-items: center; gap: 1rem;">
                                    <span style="font-size: 1.5rem;">📖</span>
                                    <strong>Fiksi</strong>
                                </div>
                            </td>
                            <td>412</td>
                            <td>287</td>
                            <td>125</td>
                            <td><span class="badge badge-success">Sangat Tinggi</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="display: flex; align-items: center; gap: 1rem;">
                                    <span style="font-size: 1.5rem;">🏛️</span>
                                    <strong>Sejarah</strong>
                                </div>
                            </td>
                            <td>156</td>
                            <td>134</td>
                            <td>22</td>
                            <td><span class="badge badge-warning">Sedang</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="display: flex; align-items: center; gap: 1rem;">
                                    <span style="font-size: 1.5rem;">🔬</span>
                                    <strong>Sains</strong>
                                </div>
                            </td>
                            <td>198</td>
                            <td>156</td>
                            <td>42</td>
                            <td><span class="badge badge-success">Tinggi</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="display: flex; align-items: center; gap: 1rem;">
                                    <span style="font-size: 1.5rem;">💼</span>
                                    <strong>Bisnis</strong>
                                </div>
                            </td>
                            <td>142</td>
                            <td>109</td>
                            <td>33</td>
                            <td><span class="badge badge-success">Tinggi</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>
</html>