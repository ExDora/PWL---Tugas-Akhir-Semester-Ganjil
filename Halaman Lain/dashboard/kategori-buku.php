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
                    <a href="#" class="nav-link active">
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
                <button class="btn btn-primary" onclick="openPopup()">
                    <i class="fas fa-plus"></i> Tambah Kategori Baru
                </button>
            </div>
        </section>

        <!-- CATEGORY GRID -->
        <section class="category-grid">

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
                    <?php
                    require_once '../../config/db_connect.php';

$result = $conn->query("SELECT * FROM book_categories");

$categories = $result->fetch_all(MYSQLI_ASSOC);

foreach ($categories as $cat):
?>
    <tr>
        <td><?= $cat['categories']; ?></td>
        <td>0</td>  
        <td>0</td>  
        <td>0</td>  
        <td>⭐</td> 
        <td>
            <button class="btn btn-sm btn-outline">Edit</button>
            <button class="btn btn-sm btn-danger">Hapus</button>
        </td>
    </tr>
        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </section>
    </main>

    <!-- POPUP FORM -->
    <div class="popup-overlay" id="popupOverlay">
        <div class="popup-container">
            <div class="popup-header">
                <h2>Tambah Kategori Baru</h2>
            </div>
            <form id="categoryForm" method="POST" action="tambah-kategori.php">
                <div class="form-group">
                    <label for="namaKategori">Nama Kategori</label>
                    <input type="text" id="namaKategori" name="name" placeholder="Masukkan nama kategori" required>
                </div>
                <div class="popup-actions">
                    <button type="button" class="btn btn-outline" onclick="closePopup()">Cancel</button>
                    <button type="submit" name="store" class="btn btn-primary">Continue</button>
                </div>
            </form>
        </div>
    </div>
    <script src="../../script/dashboard.js"></script>
</body>
</html>