<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Buku - LibraryHub</title>
    <link rel="stylesheet" href="../style/Katalog.css">
</head>
<body>
    <!-- Back Navigation -->
    <a href="dashboard.html" class="back-nav">← Dashboard</a>

    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <!-- <nav class="nav-breadcrumb">
                <a href="index.html">Beranda</a>
                <span>›</span>
                <a href="dashboard.html">Dashboard</a>
                <span>›</span>
                <span>Katalog</span>
            </nav> -->
            <h1 class="header-title">Katalog Buku</h1>
            <p class="header-subtitle">Temukan buku favorit Anda dari ribuan koleksi yang tersedia</p>
        </div>
    </header>

    <nav>
        <div class="nav-grup">
            <a href="#" class="logo"><img src="Logo.jpg" alt="Logo"></a>
            <ul class="nav-links">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../Halaman Lain/Katalog.php">Catalogue</a></li>
                <li><a href="../Halaman Lain/aboutus.php">About</a></li>
            </ul>

            <div class="tombol-login">
                <a href="Login.html" class="tombol tombol-garis">Login</a>
            </div>
            <!-- <button class="menu-toggle" onclick="toggleMenu()">☰</button> -->
        </div>
    </nav>



    <!-- Search and Filter Section -->
    <section class="pencarian">
        <form class="form-pencarian" id="cari">
            <div class="kontainer-pencarian">
                <!-- <span class="ikon-pencarian">🔍</span> -->
                <input 
                    type="text" 
                    class="input" 
                    id="input-pencarian"
                    placeholder="🔍     Cari judul buku, penulis, atau ISBN..."
                >
            </div>
            <button type="submit" class="tombol-cari">Cari Buku</button>
        </form>
        
        <div class="filter">
            <div class="grup-filter">
                <label class="label-filter">Kategori:</label>
                <select class="pilih-filter" id="filter-kategori">
                    <option value="">Semua Kategori</option>
                    <option value="programming">Programming</option>
                    <option value="design">Design</option>
                    <option value="business">Business</option>
                    <option value="science">Science</option>
                    <option value="fiction">Fiction</option>
                    <option value="biography">Biography</option>
                    <option value="history">History</option>
                </select>
            </div>
            
            <div class="grup-filter">
                <label class="label-filter">Tahun:</label>
                <select class="pilih-filter" id="yearFilter">
                    <option value="">Semua Tahun</option>
                    <option value="2024">2024</option>
                    <option value="2023">2023</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="older">Lebih Lama</option>
                </select>
            </div>
            
            <div class="grup-filter">
                <label class="label-filter">Status:</label>
                <select class="pilih-filter" id="statusFilter">
                    <option value="">Semua Status</option>
                    <option value="available">Tersedia</option>
                    <option value="borrowed">Dipinjam</option>
                    <option value="reserved">Direservasi</option>
                </select>
            </div>
            
            <button type="button" class="hapus" id="hapusfilter">Reset Filter</button>
        </div>
    </section>

    <!-- Results Section -->
    <section class="results-section">
        <div class="results-header">
            <div class="results-info">
                Menampilkan <span class="results-count" id="resultsCount">0</span> dari <span id="totalBooks">0</span> buku
            </div>
            
            <div style="display: flex; gap: 1rem; align-items: center; flex-wrap: wrap;">
                <div class="view-toggle">
                    <button class="view-btn active" id="gridView" data-view="grid">⊞</button>
                    <button class="view-btn" id="listView" data-view="list">☰</button>
                </div>
                
                <select class="sort-select" id="sortSelect">
                    <option value="title">Urutkan: Judul</option>
                    <option value="author">Urutkan: Penulis</option>
                    <option value="year">Urutkan: Tahun Terbit</option>
                    <option value="popular">Urutkan: Popularitas</option>
                </select>
            </div>
        </div>

        <!-- Books Grid -->
        <div class="books-grid" id="booksGrid">
            <!-- Books will be populated by JavaScript -->
        </div>

        <!-- Books List -->
        <div class="books-list" id="booksList">
            <!-- Books will be populated by JavaScript -->
        </div>

        <!-- Loading Spinner -->
        <div class="loading-spinner" id="loadingSpinner" style="display: none;">
            <div class="spinner"></div>
        </div>

        <!-- Empty State -->
        <div class="empty-state" id="emptyState" style="display: none;">
            <div class="empty-icon">📚</div>
            <h3 class="empty-title">Tidak ada buku ditemukan</h3>
            <p class="empty-subtitle">Coba ubah kata kunci pencarian atau filter yang Anda gunakan</p>
            <button class="empty-action" onclick="clearAllFilters()">Reset Pencarian</button>
        </div>

        <!-- Pagination -->
        <div class="pagination" id="pagination">
            <!-- Pagination will be generated by JavaScript -->
        </div>
    </section>

    <!-- Book Detail Modal -->
    <div class="book-modal" id="bookModal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeBookModal()">×</button>
            <div class="modal-book-cover" id="modalBookCover">
                <img src="" alt="Book Cover" id="modalBookImage" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
            </div>
            <h2 class="modal-book-title" id="modalBookTitle"></h2>
            <p class="modal-book-author" id="modalBookAuthor"></p>
            
            <div class="modal-book-details">
                <div class="detail-item">
                    <div class="detail-label">Kategori</div>
                    <div class="detail-value" id="modalBookCategory"></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Tahun Terbit</div>
                    <div class="detail-value" id="modalBookYear"></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">ISBN</div>
                    <div class="detail-value" id="modalBookISBN"></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Halaman</div>
                    <div class="detail-value" id="modalBookPages"></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Status</div>
                    <div class="detail-value" id="modalBookStatus"></div>
                </div>
                <div class="detail-item">
                    <div class="detail-label">Rating</div>
                    <div class="detail-value" id="modalBookRating">⭐⭐⭐⭐⭐</div>
                </div>
            </div>
            
            <div class="modal-description" id="modalBookDescription"></div>
            
            <div class="modal-actions">
                <button class="action-btn btn-primary" id="modalBookingBtn">📅 Booking Buku</button>
                <button class="action-btn btn-secondary">⭐ Tambah Favorit</button>
            </div>
        </div>
    </div>

    <script src="../script/script.js"></script>
</body>
</html>