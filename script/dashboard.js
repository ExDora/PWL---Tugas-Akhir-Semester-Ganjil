// API Configuration
const API_BASE_URL = 'https://readtrack-22.preview.emergentagent.com/api';

// Load data on page load
document.addEventListener('DOMContentLoaded', function() {
    loadBorrowings();
    
    // Set default date to today
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('borrow_date').value = today;
});

// Load all borrowings
async function loadBorrowings() {
    try {
        const response = await fetch(`${API_BASE_URL}/borrowings`);
        const borrowings = await response.json();
        
        updateStats(borrowings);
        renderTable(borrowings);
    } catch (error) {
        console.error('Error loading borrowings:', error);
        showToast('Gagal memuat data', 'error');
    }
}

// Update statistics
function updateStats(borrowings) {
    const total = borrowings.length;
    const borrowed = borrowings.filter(b => b.status === 'Dipinjam').length;
    const returned = borrowings.filter(b => b.status === 'Dikembalikan').length;
    
    document.getElementById('stat-total').textContent = total;
    document.getElementById('stat-borrowed').textContent = borrowed;
    document.getElementById('stat-returned').textContent = returned;
}

// Render table
function renderTable(borrowings) {
    const tbody = document.getElementById('table-body');
    
    if (borrowings.length === 0) {
        tbody.innerHTML = '<tr><td colspan="7" class="text-center">Tidak ada data peminjaman</td></tr>';
        return;
    }
    
    tbody.innerHTML = borrowings.map((borrowing, index) => `
        <tr data-id="${borrowing.id}">
            <td>${index + 1}</td>
            <td>${escapeHtml(borrowing.borrower_name)}</td>
            <td>${escapeHtml(borrowing.book_title)}</td>
            <td>${borrowing.borrow_date}</td>
            <td>${borrowing.return_date}</td>
            <td>
                ${borrowing.status === 'Dipinjam' 
                    ? '<span class="badge badge-orange">Dipinjam</span>' 
                    : '<span class="badge badge-green">Dikembalikan</span>'}
            </td>
            <td>
                <div class="action-buttons">
                    ${borrowing.status === 'Dipinjam' 
                        ? `<button class="btn-icon btn-success" onclick="returnBook('${borrowing.id}')" title="Kembalikan">✓</button>` 
                        : ''}
                    <button class="btn-icon btn-danger" onclick="deleteBook('${borrowing.id}')" title="Hapus">🗑</button>
                </div>
            </td>
        </tr>
    `).join('');
}

// Open modal
function openModal() {
    document.getElementById('modal').classList.add('active');
}

// Close modal
function closeModal() {
    document.getElementById('modal').classList.remove('active');
    document.getElementById('borrowing-form').reset();
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('borrow_date').value = today;
}

// Submit form
async function submitForm(event) {
    event.preventDefault();
    
    const formData = {
        borrower_name: document.getElementById('borrower_name').value,
        book_title: document.getElementById('book_title').value,
        borrow_date: document.getElementById('borrow_date').value,
        return_date: document.getElementById('return_date').value,
        notes: document.getElementById('notes').value || null
    };
    
    try {
        const response = await fetch(`${API_BASE_URL}/borrowings`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        });
        
        if (response.ok) {
            showToast('Peminjaman berhasil ditambahkan!', 'success');
            closeModal();
            loadBorrowings();
        } else {
            showToast('Gagal menambah peminjaman', 'error');
        }
    } catch (error) {
        console.error('Error submitting form:', error);
        showToast('Gagal menambah peminjaman', 'error');
    }
}

// Return book
async function returnBook(id) {
    if (!confirm('Tandai buku ini sebagai sudah dikembalikan?')) return;
    
    try {
        const response = await fetch(`${API_BASE_URL}/borrowings/${id}`, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ status: 'Dikembalikan' })
        });
        
        if (response.ok) {
            showToast('Buku berhasil dikembalikan!', 'success');
            loadBorrowings();
        } else {
            showToast('Gagal mengembalikan buku', 'error');
        }
    } catch (error) {
        console.error('Error returning book:', error);
        showToast('Gagal mengembalikan buku', 'error');
    }
}

// Delete book
async function deleteBook(id) {
    if (!confirm('Hapus data peminjaman ini?')) return;
    
    try {
        const response = await fetch(`${API_BASE_URL}/borrowings/${id}`, {
            method: 'DELETE'
        });
        
        if (response.ok) {
            showToast('Data berhasil dihapus!', 'success');
            loadBorrowings();
        } else {
            showToast('Gagal menghapus data', 'error');
        }
    } catch (error) {
        console.error('Error deleting book:', error);
        showToast('Gagal menghapus data', 'error');
    }
}

// Show toast notification
function showToast(message, type = 'success') {
    const toast = document.getElementById('toast');
    toast.textContent = message;
    toast.className = `toast ${type} active`;
    
    setTimeout(() => {
        toast.classList.remove('active');
    }, 3000);
}

// Escape HTML to prevent XSS
function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
}

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('modal');
    if (event.target === modal) {
        closeModal();
    }
}