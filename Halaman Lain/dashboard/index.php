<?php
    require_once '../../actions/sign-up/get-users.php';
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Peminjaman Buku</title>
    <link rel="stylesheet" href="../../style/dashboard.css">
</head>
<body>
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <a href="../../index.php"><h2>📚 Library</h2></a>
        </div>
        <nav class="sidebar-nav">
            <a href="#" class="nav-item active" data-page="dashboard">
                <span class="nav-icon">🏠</span>
                <span class="nav-text">Dashboard</span>
            </a>
            <a href="#" class="nav-item" data-page="list-user">
                <span class="nav-icon">👥</span>
                <span class="nav-text">List User</span>
            </a>
            <a href="#" class="nav-item" data-page="peminjam-buku">
                <span class="nav-icon">📖</span>
                <span class="nav-text">Peminjam Buku</span>
            </a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Dashboard Page -->
        <section id="dashboard" class="page active">
            <div class="page-header">
                <h1>Dashboard</h1>
                <p class="page-subtitle">Peminjaman buku secara online</p>
            </div>
            
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">👥</div>
                    <div class="stat-content">
                        <h3 id="totalUsers">0</h3>
                        <p>Total User</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">📚</div>
                    <div class="stat-content">
                        <h3 id="totalBorrowers">0</h3>
                        <p>Peminjam Aktif</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">⚠️</div>
                    <div class="stat-content">
                        <h3 id="overdueBooks">0</h3>
                        <p>Terlambat</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">✅</div>
                    <div class="stat-content">
                        <h3 id="onTimeBooks">0</h3>
                        <p>Tepat Waktu</p>
                    </div>
                </div>
            </div>

            <div class="recent-activity">
                <h2>Aktivitas Terbaru</h2>
                <div class="activity-list" id="activityList">
                    <!-- Activity items will be inserted here -->
                </div>
            </div>
        </section>

        <!-- List User Page -->
        <section id="list-user" class="page">
            <div class="page-header">
                <h1>List User</h1>
                <button class="btn-primary" id="btnAddUser">
                    <span>+</span> Tambah User
                </button>
            </div>

            <div class="table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="userTableBody">
                        <?php foreach ($users as $index => $user):?>
                            <tr>
                                <td>
                                    <?= $index + 1; ?>
                                </td>
                                <td>
                                    <?= $user['name']; ?>
                                </td>
                                <td>
                                    <?= $user['email']; ?>
                                </td>
                                <td>
                                    <?= $user['created_at']; ?>
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
        </section>

        <!-- Peminjam Buku Page -->
        <section id="peminjam-buku" class="page">
            <div class="page-header">
                <h1>Peminjam Buku</h1>
                <button class="btn-primary" id="btnAddBorrower">
                    <span>+</span> Tambah Peminjam
                </button>
            </div>

            <div class="table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th>Buku Dipinjam</th>
                            <th>Tanggal Pinjam</th>
                            <th>Batas Waktu</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="borrowerTableBody">
                        
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- Modal Add User -->
    <div id="modalAddUser" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Tambah User Baru</h2>
                <span class="close" data-modal="modalAddUser">&times;</span>
            </div>
            <form id="formAddUser">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-secondary" data-modal="modalAddUser">Batal</button>
                    <button type="submit" class="btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Add Borrower -->
    <div id="modalAddBorrower" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Tambah Peminjam Buku</h2>
                <span class="close" data-modal="modalAddBorrower">&times;</span>
            </div>
            <form id="formAddBorrower">
                <div class="form-group">
                    <label for="borrowerEmail">Email</label>
                    <input type="email" id="borrowerEmail" required>
                </div>
                <div class="form-group">
                    <label for="borrowerPhone">No Telepon</label>
                    <input type="tel" id="borrowerPhone" required>
                </div>
                <div class="form-group">
                    <label for="bookTitle">Buku Dipinjam</label>
                    <input type="text" id="bookTitle" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-secondary" data-modal="modalAddBorrower">Batal</button>
                    <button type="submit" class="btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="../../script/dashboard.js"></script>
</body>
</html>