<?php
    session_start();
    require_once '../../actions/products/get-products.php';
    require_once '../../actions/products/get-total-products.php';
    require_once '../../actions/sign-up/get-users.php';


    // if (!isset($_SESSION['usersss'])) {
    //     header(header: 'Location: ../../index.php');
    //     exit;
    // }

    // $userss = $_SESSION['usersss'];

    $usersss = getUsersss($_GET);

    $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User - Library Management System</title>
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
                    <a href="list-user.php" class="nav-link active">
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
                <h1>List User</h1>
                <div class="breadcrumb">
                    <span>🏠 Home</span>
                    <span>/</span>
                    <span>Manajemen</span>
                    <span>/</span>
                    <span>List User</span>
                </div>
            </div>
            <div class="header-right">
                <div class="search-box">
                    <i class="fas fa-search search-icon"></i>
                    <input name="keyword" type="text" placeholder="Cari user...">
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
                        <h3>Total Users</h3>
                        <div class="stat-value">856</div>
                    </div>
                    <div class="stat-icon primary">
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
                        <h3>Active Users</h3>
                        <div class="stat-value">723</div>
                    </div>
                    <div class="stat-icon success">
                        ✅
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 8%
                    </span>
                    <span>user aktif</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>New Members</h3>
                        <div class="stat-value">42</div>
                    </div>
                    <div class="stat-icon warning">
                        ⭐
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change positive">
                        <i class="fas fa-arrow-up"></i> 12%
                    </span>
                    <span>bulan ini</span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-header">
                    <div class="stat-info">
                        <h3>Suspended</h3>
                        <div class="stat-value">8</div>
                    </div>
                    <div class="stat-icon danger">
                        🚫
                    </div>
                </div>
                <div class="stat-footer">
                    <span class="stat-change negative">
                        <i class="fas fa-arrow-down"></i> 3%
                    </span>
                    <span>akun disuspend</span>
                </div>
            </div>
        </section>

        <!-- USER TABLE -->
        <section class="table-container">
            <div class="table-header">
                <h3>Daftar User Terdaftar</h3>
                <div class="table-actions">
                    <button class="btn btn-outline btn-sm">
                        <i class="fas fa-filter"></i> Filter
                    </button>
                    <button class="btn btn-outline btn-sm">
                        <i class="fas fa-download"></i> Export
                    </button>
                    <button class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i> Tambah User
                    </button>
                </div>
            </div>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>No. Telepon</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $index => $user):?>
                            <tr>
                                <td>
                                    <?= $index + 1; ?>
                                </td>
                                <td>
                                    <?= $user['phone']; ?>
                                </td>
                                <td>
                                    <?= $user['email']; ?>
                                </td>
                            </tr>
                        <?php endforeach;?>

                        <?php if(empty($users)):?>
                            <tr>
                                <td colspan= "5"Data>Pengguna tidak ditemukan</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <div class="table-pagination">
                <div class="pagination-info">
                    Menampilkan <strong>1-10</strong> dari <strong>856</strong> users
                </div>
                <div class="pagination-buttons">
                    <a href="?page=<?= $currentPage -1?>">
                        <button class="pagination-btn">
                            <i class="fas fa-chevron-left"></i> Previous
                        </button>
                    </a>
                    <a href="?page=<?= $currentPage + 1?>">
                        <button class="pagination-btn">
                            Next <i class="fas fa-chevron-right"></i>
                        </button>
                    </a>
                </div>
            </div>
        </section>
    </main>
</body>
</html>