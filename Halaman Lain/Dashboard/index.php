<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Peminjaman Buku</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div id="root">
        <!-- Header -->
        <div class="header">
            <div class="container">
                <h1>Sistem Peminjaman Buku</h1>
                <p>Kelola data peminjaman buku perpustakaan</p>
            </div>
        </div>

        <div class="container">
            <!-- Stats Cards -->
            <div class="stats-grid">
                <div class="stat-card stat-blue">
                    <div class="stat-label">Total Peminjaman</div>
                    <div class="stat-value" id="stat-total"><?php echo $total; ?></div>
                </div>
                <div class="stat-card stat-orange">
                    <div class="stat-label">Sedang Dipinjam</div>
                    <div class="stat-value" id="stat-borrowed"><?php echo $borrowed; ?></div>
                </div>
                <div class="stat-card stat-green">
                    <div class="stat-label">Telah Dikembalikan</div>
                    <div class="stat-value" id="stat-returned"><?php echo $returned; ?></div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="card">
                <div class="card-header">
                    <h2>Data Peminjaman Buku</h2>
                    <button class="btn btn-primary" onclick="openModal()">+ Tambah Peminjaman Baru</button>
                </div>
                <div class="card-body">
                    <table class="table" id="borrowings-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Peminjam</th>
                                <th>Judul Buku</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (empty($borrowings)): ?>
                                <tr>
                                    <td colspan="7" class="text-center">Tidak ada data peminjaman</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($borrowings as $index => $borrowing): ?>
                                    <tr data-id="<?php echo $borrowing['id']; ?>">
                                        <td><?php echo $index + 1; ?></td>
                                        <td><?php echo htmlspecialchars($borrowing['borrower_name']); ?></td>
                                        <td><?php echo htmlspecialchars($borrowing['book_title']); ?></td>
                                        <td><?php echo $borrowing['borrow_date']; ?></td>
                                        <td><?php echo $borrowing['return_date']; ?></td>
                                        <td>
                                            <?php if ($borrowing['status'] === 'Dipinjam'): ?>
                                                <span class="badge badge-orange">Dipinjam</span>
                                            <?php else: ?>
                                                <span class="badge badge-green">Dikembalikan</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <div class="action-buttons">
                                                <?php if ($borrowing['status'] === 'Dipinjam'): ?>
                                                    <button class="btn-icon btn-success" onclick="returnBook('<?php echo $borrowing['id']; ?>')" title="Kembalikan">
                                                        ✓
                                                    </button>
                                                <?php endif; ?>
                                                <button class="btn-icon btn-danger" onclick="deleteBook('<?php echo $borrowing['id']; ?>')" title="Hapus">
                                                    🗑
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Form -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Form Peminjaman Buku</h3>
                <button class="modal-close" onclick="closeModal()">&times;</button>
            </div>
            <form id="borrowing-form" onsubmit="submitForm(event)">
                <div class="form-group">
                    <label for="borrower_name">Nama Peminjam</label>
                    <input type="text" id="borrower_name" name="borrower_name" placeholder="Nama lengkap peminjam" required>
                </div>
                <div class="form-group">
                    <label for="book_title">Judul Buku</label>
                    <input type="text" id="book_title" name="book_title" placeholder="Judul buku yang dipinjam" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="borrow_date">Tanggal Pinjam</label>
                        <input type="date" id="borrow_date" name="borrow_date" required>
                    </div>
                    <div class="form-group">
                        <label for="return_date">Tanggal Kembali</label>
                        <input type="date" id="return_date" name="return_date" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="notes">Catatan (Opsional)</label>
                    <textarea id="notes" name="notes" rows="3" placeholder="Catatan tambahan"></textarea>
                </div>
                <div class="form-actions">
                    <button type="button" class="btn btn-secondary" onclick="closeModal()">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Peminjaman</button>
                </div>
            </form>
        </div>
    </div>

    <script src="dashboard.js"></script>
</body>
</html>