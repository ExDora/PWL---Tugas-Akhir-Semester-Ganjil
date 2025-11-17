<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan - Library Management System</title>
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
                    <a href="kategori-buku.php" class="nav-link">
                        <span class="nav-icon">🏷️</span>
                        <span>Kategori Buku</span>
                    </a>
                </li>
            </ul>

            <div class="nav-section">Lainnya</div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
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
                <h1>Pengaturan</h1>
                <div class="breadcrumb">
                    <span>🏠 Home</span>
                    <span>/</span>
                    <span>Pengaturan</span>
                </div>
            </div>
            <div class="header-right">
                <div class="search-box">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" placeholder="Cari pengaturan...">
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

        <div class="settings-container">
            <!-- PROFILE SETTINGS -->
            <div class="settings-card fade-in">
                <div class="settings-header">
                    <h3>Profil Admin</h3>
                    <p>Kelola informasi profil administrator</p>
                </div>
                <form>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" id="nama" value="Administrator" placeholder="Masukkan nama lengkap">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" value="admin@library.com" placeholder="Masukkan email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Nomor Telepon</label>
                            <input type="tel" id="phone" value="+62 812-3456-7890" placeholder="Masukkan nomor telepon">
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select id="role">
                                <option selected>Super Admin</option>
                                <option>Admin</option>
                                <option>Moderator</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea id="bio" placeholder="Tulis bio singkat...">Pengelola perpustakaan dengan pengalaman lebih dari 5 tahun dalam sistem manajemen digital.</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan Perubahan
                    </button>
                </form>
            </div>

            <!-- SECURITY SETTINGS -->
            <div class="settings-card">
                <div class="settings-header">
                    <h3>Keamanan Akun</h3>
                    <p>Ubah password dan pengaturan keamanan</p>
                </div>
                <form>
                    <div class="form-group">
                        <label for="old-password">Password Lama</label>
                        <input type="password" id="old-password" placeholder="Masukkan password lama">
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="new-password">Password Baru</label>
                            <input type="password" id="new-password" placeholder="Masukkan password baru">
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Konfirmasi Password</label>
                            <input type="password" id="confirm-password" placeholder="Konfirmasi password baru">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-lock"></i> Update Password
                    </button>
                </form>
                
                <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--border-color);">
                    <h4 style="margin-bottom: 1rem; color: var(--text-primary);">Two-Factor Authentication</h4>
                    <div class="switch-group" style="border: none; padding: 0;">
                        <div class="switch-info">
                            <h4>Aktifkan 2FA</h4>
                            <p>Tingkatkan keamanan akun dengan autentikasi dua faktor</p>
                        </div>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
            </div>

            <!-- LIBRARY SETTINGS -->
            <div class="settings-card">
                <div class="settings-header">
                    <h3>Pengaturan Perpustakaan</h3>
                    <p>Konfigurasi umum perpustakaan</p>
                </div>
                <form>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="library-name">Nama Perpustakaan</label>
                            <input type="text" id="library-name" value="Perpustakaan Digital Nusantara" placeholder="Nama perpustakaan">
                        </div>
                        <div class="form-group">
                            <label for="max-borrow">Maksimal Peminjaman</label>
                            <input type="number" id="max-borrow" value="3" placeholder="Jumlah buku">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="borrow-days">Durasi Peminjaman (Hari)</label>
                            <input type="number" id="borrow-days" value="14" placeholder="Jumlah hari">
                        </div>
                        <div class="form-group">
                            <label for="fine-per-day">Denda per Hari</label>
                            <input type="number" id="fine-per-day" value="5000" placeholder="Rupiah">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat Perpustakaan</label>
                        <textarea id="address" placeholder="Alamat lengkap...">Jl. Pendidikan No. 123, Jakarta Pusat, DKI Jakarta 10110</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan Pengaturan
                    </button>
                </form>
            </div>

            <!-- NOTIFICATION SETTINGS -->
            <div class="settings-card">
                <div class="settings-header">
                    <h3>Notifikasi</h3>
                    <p>Kelola preferensi notifikasi</p>
                </div>
                
                <div class="switch-group">
                    <div class="switch-info">
                        <h4>Notifikasi Email</h4>
                        <p>Terima notifikasi penting melalui email</p>
                    </div>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>

                <div class="switch-group">
                    <div class="switch-info">
                        <h4>Pengingat Jatuh Tempo</h4>
                        <p>Kirim pengingat otomatis untuk buku yang akan jatuh tempo</p>
                    </div>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>

                <div class="switch-group">
                    <div class="switch-info">
                        <h4>Notifikasi Peminjaman Baru</h4>
                        <p>Dapatkan notifikasi saat ada peminjaman baru</p>
                    </div>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>

                <div class="switch-group">
                    <div class="switch-info">
                        <h4>Laporan Mingguan</h4>
                        <p>Terima ringkasan statistik perpustakaan setiap minggu</p>
                    </div>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                    </label>
                </div>

                <div class="switch-group">
                    <div class="switch-info">
                        <h4>Alert Keterlambatan</h4>
                        <p>Notifikasi untuk pengembalian yang terlambat</p>
                    </div>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>
            </div>

            <!-- SYSTEM SETTINGS -->
            <div class="settings-card">
                <div class="settings-header">
                    <h3>Pengaturan Sistem</h3>
                    <p>Konfigurasi sistem dan tampilan</p>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="language">Bahasa</label>
                        <select id="language">
                            <option selected>Bahasa Indonesia</option>
                            <option>English</option>
                            <option>中文</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="timezone">Zona Waktu</label>
                        <select id="timezone">
                            <option selected>WIB (GMT+7)</option>
                            <option>WITA (GMT+8)</option>
                            <option>WIT (GMT+9)</option>
                        </select>
                    </div>
                </div>

                <div class="switch-group">
                    <div class="switch-info">
                        <h4>Mode Gelap</h4>
                        <p>Gunakan tema gelap untuk mengurangi kelelahan mata</p>
                    </div>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>

                <div class="switch-group">
                    <div class="switch-info">
                        <h4>Auto Backup</h4>
                        <p>Backup otomatis database setiap hari</p>
                    </div>
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider"></span>
                    </label>
                </div>

                <div class="switch-group">
                    <div class="switch-info">
                        <h4>Maintenance Mode</h4>
                        <p>Aktifkan mode maintenance untuk pemeliharaan sistem</p>
                    </div>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>

            <!-- DANGER ZONE -->
            <div class="settings-card" style="border-color: var(--danger-color);">
                <div class="settings-header">
                    <h3 style="color: var(--danger-color);">⚠️ Zona Bahaya</h3>
                    <p>Tindakan permanen yang tidak dapat dibatalkan</p>
                </div>
                
                <div style="display: flex; flex-direction: column; gap: 1rem;">
                    <button class="btn btn-outline" style="border-color: var(--warning-color); color: var(--warning-color);">
                        <i class="fas fa-database"></i> Reset Database
                    </button>
                    <button class="btn btn-outline" style="border-color: var(--danger-color); color: var(--danger-color);">
                        <i class="fas fa-trash"></i> Hapus Semua Data
                    </button>
                    <button class="btn btn-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout dari Semua Device
                    </button>
                </div>
            </div>
        </div>
    </main>
</body>
</html>