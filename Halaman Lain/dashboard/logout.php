<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout - Library Management System</title>
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
                    <a href="dashboard.html" class="nav-link">
                        <span class="nav-icon">🏠</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="analytics.html" class="nav-link">
                        <span class="nav-icon">📊</span>
                        <span>Analytics</span>
                    </a>
                </li>
            </ul>

            <div class="nav-section">Manajemen</div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="list-user.html" class="nav-link">
                        <span class="nav-icon">👥</span>
                        <span>List User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="peminjam-buku.html" class="nav-link">
                        <span class="nav-icon">📖</span>
                        <span>Peminjam Buku</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="koleksi-buku.html" class="nav-link">
                        <span class="nav-icon">📚</span>
                        <span>Koleksi Buku</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="riwayat.html" class="nav-link">
                        <span class="nav-icon">🕒</span>
                        <span>Riwayat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="kategori-buku.html" class="nav-link">
                        <span class="nav-icon">🏷️</span>
                        <span>Kategori Buku</span>
                    </a>
                </li>
            </ul>

            <div class="nav-section">Lainnya</div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="pengaturan.html" class="nav-link">
                        <span class="nav-icon">⚙️</span>
                        <span>Pengaturan</span>
                    </a>
                </li>
            </ul>

            <div class="logout-section">
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="logout.html" class="nav-link logout active">
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
        <div class="logout-container">
            <div class="logout-card fade-in">
                <div class="logout-icon">
                    🚪
                </div>
                <h2>Konfirmasi Logout</h2>
                <p>Apakah Anda yakin ingin keluar dari sistem?<br>Pastikan semua pekerjaan Anda telah tersimpan.</p>
                
                <div style="background: rgba(239, 68, 68, 0.1); padding: 1rem; border-radius: 10px; margin-bottom: 2rem; border-left: 4px solid var(--danger-color);">
                    <p style="color: var(--text-primary); font-size: 0.9rem; margin: 0;">
                        <i class="fas fa-info-circle"></i> Anda akan diarahkan ke halaman login setelah logout
                    </p>
                </div>

                <div class="logout-actions">
                    <button class="btn btn-outline" onclick="window.location.href='dashboard.html'">
                        <i class="fas fa-times"></i> Batal
                    </button>
                    <button class="btn btn-danger" onclick="performLogout()">
                        <i class="fas fa-sign-out-alt"></i> Ya, Logout
                    </button>
                </div>

                <div style="margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--border-color);">
                    <div class="switch-group" style="border: none; padding: 0; margin-bottom: 1rem;">
                        <div class="switch-info">
                            <h4 style="font-size: 0.9rem;">Logout dari semua device</h4>
                            <p style="font-size: 0.8rem;">Keluar dari semua sesi aktif di perangkat lain</p>
                        </div>
                        <label class="switch">
                            <input type="checkbox" id="logoutAll">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>

                <div style="text-align: center; margin-top: 2rem;">
                    <p style="color: var(--text-secondary); font-size: 0.85rem;">
                        Terima kasih telah menggunakan Library Management System
                    </p>
                </div>
            </div>
        </div>
    </main>

    <script>
        function performLogout() {
            const logoutAll = document.getElementById('logoutAll').checked;
            
            // Show loading state
            const btn = event.target;
            const originalText = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Logging out...';
            btn.disabled = true;
            
            // Simulate logout process
            setTimeout(() => {
                if (logoutAll) {
                    console.log('Logging out from all devices...');
                } else {
                    console.log('Logging out from current device...');
                }
                
                // Here you would typically:
                // 1. Clear session/token
                // 2. Make API call to backend
                // 3. Redirect to login page
                
                alert('Logout berhasil! Anda akan diarahkan ke halaman login.');
                // window.location.href = 'login.html'; // Uncomment when login page exists
                window.location.href = '../sign-in/index.php'; // Temporary redirect
            }, 1500);
        }

        // Add keyboard shortcut: ESC to cancel
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                window.location.href = 'dashboard.html';
            }
        });
    </script>
</body>
</html>