// Navigation
const navItems = document.querySelectorAll('.nav-item');
const pages = document.querySelectorAll('.page');

navItems.forEach(item => {
    item.addEventListener('click', (e) => {
        e.preventDefault();
        
        // Remove active class from all nav items and pages
        navItems.forEach(nav => nav.classList.remove('active'));
        pages.forEach(page => page.classList.remove('active'));
        
        // Add active class to clicked nav item
        item.classList.add('active');
        
        // Show corresponding page
        const pageId = item.getAttribute('data-page');
        document.getElementById(pageId).classList.add('active');
        
        // Render data when switching pages
        if (pageId === 'list-user') {
            renderUsers();
        } else if (pageId === 'peminjam-buku') {
            renderBorrowers();
        } else if (pageId === 'dashboard') {
            renderDashboard();
        }
    });
});

// Format Date
function formatDate(date) {
    const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
                    'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    
    const dayName = days[date.getDay()];
    const day = date.getDate();
    const month = months[date.getMonth()];
    const year = date.getFullYear();
    
    return `${dayName}, ${day} ${month} ${year}`;
}

// Check if book is overdue
function isOverdue(dueDate) {
    const today = new Date();
    today.setHours(0, 0, 0, 0);
    dueDate.setHours(0, 0, 0, 0);
    return today > dueDate;
}

// Render Dashboard
function renderDashboard() {
    // Update statistics
    document.getElementById('totalUsers').textContent = users.length;
    document.getElementById('totalBorrowers').textContent = borrowers.length;
    
    const overdue = borrowers.filter(b => isOverdue(b.dueDate)).length;
    const onTime = borrowers.length - overdue;
    
    document.getElementById('overdueBooks').textContent = overdue;
    document.getElementById('onTimeBooks').textContent = onTime;
    
    // Render recent activity
    const activityList = document.getElementById('activityList');
    activityList.innerHTML = '';
    
    // Sort borrowers by date (newest first) and show last 5
    const recentBorrowers = [...borrowers]
        .sort((a, b) => b.borrowDate - a.borrowDate)
        .slice(0, 5);
    
    if (recentBorrowers.length === 0) {
        activityList.innerHTML = '<p style="color: var(--text-secondary); padding: 1rem;">Belum ada aktivitas</p>';
        return;
    }
    
    recentBorrowers.forEach(borrower => {
        const activityItem = document.createElement('div');
        activityItem.className = 'activity-item';
        if (isOverdue(borrower.dueDate)) {
            activityItem.classList.add('overdue');
        }
        
        const status = isOverdue(borrower.dueDate) ? '⚠️ Terlambat' : '✅ Aktif';
        
        activityItem.innerHTML = `
            <p><strong>${borrower.email}</strong> meminjam "${borrower.bookTitle}"</p>
            <span>${formatDate(borrower.borrowDate)} - ${status}</span>
        `;
        
        activityList.appendChild(activityItem);
    });
}

// Render Users Table
function renderUsers() {
    const tbody = document.getElementById('userTableBody');
    tbody.innerHTML = '';
    
    users.forEach((user, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${index + 1}</td>
            <td>${user.username}</td>
            <td>${user.email}</td>
            <td>
                <button class="btn-edit" onclick="editUser(${user.id})">Edit</button>
                <button class="btn-delete" onclick="deleteUser(${user.id})">Delete</button>
            </td>
        `;
        tbody.appendChild(row);
    });
}

// Render Borrowers Table
function renderBorrowers() {
    const tbody = document.getElementById('borrowerTableBody');
    tbody.innerHTML = '';
    
    borrowers.forEach((borrower, index) => {
        const row = document.createElement('tr');
        const overdue = isOverdue(borrower.dueDate);
        
        if (overdue) {
            row.classList.add('overdue');
        }
        
        const statusBadge = overdue 
            ? '<span class="status-badge danger">Terlambat</span>'
            : '<span class="status-badge success">Tepat Waktu</span>';
        
        row.innerHTML = `
            <td>${index + 1}</td>
            <td>${borrower.email}</td>
            <td>${borrower.phone}</td>
            <td>${borrower.bookTitle}</td>
            <td>${formatDate(borrower.borrowDate)}</td>
            <td>${formatDate(borrower.dueDate)}</td>
            <td>${statusBadge}</td>
            <td>
                <button class="btn-edit" onclick="editBorrower(${borrower.id})">Edit</button>
                <button class="btn-delete" onclick="deleteBorrower(${borrower.id})">Delete</button>
            </td>
        `;
        tbody.appendChild(row);
    });
}

// Modal Functions
const modalAddUser = document.getElementById('modalAddUser');
const modalAddBorrower = document.getElementById('modalAddBorrower');
const btnAddUser = document.getElementById('btnAddUser');
const btnAddBorrower = document.getElementById('btnAddBorrower');

btnAddUser.addEventListener('click', () => {
    modalAddUser.classList.add('active');
});

btnAddBorrower.addEventListener('click', () => {
    modalAddBorrower.classList.add('active');
});

// Close modal
document.querySelectorAll('.close, .btn-secondary').forEach(btn => {
    btn.addEventListener('click', () => {
        const modalId = btn.getAttribute('data-modal');
        document.getElementById(modalId).classList.remove('active');
    });
});

// Close modal when clicking outside
window.addEventListener('click', (e) => {
    if (e.target.classList.contains('modal')) {
        e.target.classList.remove('active');
    }
});

// Add User Form
document.getElementById('formAddUser').addEventListener('submit', (e) => {
    e.preventDefault();
    
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    
    const newUser = {
        id: users.length > 0 ? Math.max(...users.map(u => u.id)) + 1 : 1,
        username,
        email
    };
    
    users.push(newUser);
    renderUsers();
    renderDashboard();
    
    modalAddUser.classList.remove('active');
    e.target.reset();
    
    alert('User berhasil ditambahkan!');
});

// Add Borrower Form
document.getElementById('formAddBorrower').addEventListener('submit', (e) => {
    e.preventDefault();
    
    const email = document.getElementById('borrowerEmail').value;
    const phone = document.getElementById('borrowerPhone').value;
    const bookTitle = document.getElementById('bookTitle').value;
    
    const borrowDate = new Date();
    const dueDate = new Date();
    dueDate.setDate(dueDate.getDate() + 7); // Add 7 days
    
    const newBorrower = {
        id: borrowers.length > 0 ? Math.max(...borrowers.map(b => b.id)) + 1 : 1,
        email,
        phone,
        bookTitle,
        borrowDate,
        dueDate
    };
    
    borrowers.push(newBorrower);
    renderBorrowers();
    renderDashboard();
    
    modalAddBorrower.classList.remove('active');
    e.target.reset();
    
    alert('Peminjam buku berhasil ditambahkan!');
});

// Edit User
function editUser(id) {
    const user = users.find(u => u.id === id);
    if (!user) return;
    
    const newUsername = prompt('Edit Username:', user.username);
    if (newUsername === null) return;
    
    const newEmail = prompt('Edit Email:', user.email);
    if (newEmail === null) return;
    
    if (newUsername.trim() && newEmail.trim()) {
        user.username = newUsername.trim();
        user.email = newEmail.trim();
        renderUsers();
        alert('User berhasil diupdate!');
    }
}

// Delete User
function deleteUser(id) {
    if (confirm('Apakah Anda yakin ingin menghapus user ini?')) {
        users = users.filter(u => u.id !== id);
        renderUsers();
        renderDashboard();
        alert('User berhasil dihapus!');
    }
}

// Edit Borrower
function editBorrower(id) {
    const borrower = borrowers.find(b => b.id === id);
    if (!borrower) return;
    
    const newEmail = prompt('Edit Email:', borrower.email);
    if (newEmail === null) return;
    
    const newPhone = prompt('Edit No Telepon:', borrower.phone);
    if (newPhone === null) return;
    
    const newBookTitle = prompt('Edit Buku Dipinjam:', borrower.bookTitle);
    if (newBookTitle === null) return;
    
    if (newEmail.trim() && newPhone.trim() && newBookTitle.trim()) {
        borrower.email = newEmail.trim();
        borrower.phone = newPhone.trim();
        borrower.bookTitle = newBookTitle.trim();
        renderBorrowers();
        renderDashboard();
        alert('Data peminjam berhasil diupdate!');
    }
}

// Delete Borrower
function deleteBorrower(id) {
    if (confirm('Apakah Anda yakin ingin menghapus data peminjam ini?')) {
        borrowers = borrowers.filter(b => b.id !== id);
        renderBorrowers();
        renderDashboard();
        alert('Data peminjam berhasil dihapus!');
    }
}

// Initialize Dashboard on Load
document.addEventListener('DOMContentLoaded', () => {
    renderDashboard();
    renderUsers();
    renderBorrowers();
});

function openPopup() {
            document.getElementById('popupOverlay').classList.add('active');
        }

        function closePopup() {
            document.getElementById('popupOverlay').classList.remove('active');
            document.getElementById('categoryForm').reset();
        }

        // Close popup when clicking outside
        document.getElementById('popupOverlay').addEventListener('click', function(e) {
            if (e.target === this) {
                closePopup();
            }
        });
