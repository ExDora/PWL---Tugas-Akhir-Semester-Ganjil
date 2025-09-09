// Sample book data dengan gambar
const booksData = [
    {
        id: 1,
        title: "Clean Code: A Handbook of Agile Software Craftsmanship",
        author: "Robert C. Martin",
        category: "programming",
        year: 2021,
        isbn: "978-0132350884",
        pages: 464,
        status: "available",
        description: "Buku ini mengajarkan prinsip-prinsip menulis kode yang bersih, mudah dibaca, dan mudah dikelola. Essential untuk setiap programmer yang ingin meningkatkan kualitas kodenya.",
        cover: "Logo.jpg",
        rating: 5,
        popularity: 95
    },
    {
        id: 2,
        title: "The Design of Everyday Things",
        author: "Don Norman",
        category: "design",
        year: 2022,
        isbn: "978-0465050659",
        pages: 368,
        status: "borrowed",
        description: "Panduan klasik tentang desain yang berpusat pada pengguna. Menjelaskan bagaimana desain yang baik dapat membuat hidup lebih mudah.",
        cover: "Logo.jpg",
        rating: 4,
        popularity: 87
    },
    {
        id: 3,
        title: "JavaScript: The Good Parts",
        author: "Douglas Crockford",
        category: "programming",
        year: 2020,
        isbn: "978-0596517748",
        pages: 153,
        status: "available",
        description: "Mengeksplorasi bagian-bagian terbaik dari JavaScript dan mengajarkan cara menulis kode JavaScript yang efektif dan elegan.",
        cover: "Logo.jpg",
        rating: 4,
        popularity: 82
    },
    {
        id: 4,
        title: "Thinking, Fast and Slow",
        author: "Daniel Kahneman",
        category: "science",
        year: 2019,
        isbn: "978-0374533557",
        pages: 499,
        status: "reserved",
        description: "Eksplorasi mendalam tentang dua sistem pemikiran manusia dan bagaimana keduanya membentuk penilaian dan keputusan kita.",
        cover: "Logo.jpg",
        rating: 5,
        popularity: 91
    },
    {
        id: 5,
        title: "The Lean Startup",
        author: "Eric Ries",
        category: "business",
        year: 2023,
        isbn: "978-0307887917",
        pages: 336,
        status: "available",
        description: "Metodologi revolusioner untuk menciptakan dan mengelola startup yang sukses di era yang penuh ketidakpastian.",
        cover: "Logo.jpg",
        rating: 4,
        popularity: 78
    },
    {
        id: 6,
        title: "1984",
        author: "George Orwell",
        category: "fiction",
        year: 2021,
        isbn: "978-0452284234",
        pages: 328,
        status: "available",
        description: "Novel distopia klasik yang menggambarkan masyarakat totaliter di bawah pengawasan Big Brother. Sangat relevan dengan era digital saat ini.",
        cover: "Logo.jpg",
        rating: 5,
        popularity: 94
    },
    {
        id: 7,
        title: "Steve Jobs",
        author: "Walter Isaacson",
        category: "biography",
        year: 2022,
        isbn: "978-1451648539",
        pages: 656,
        status: "borrowed",
        description: "Biografi lengkap tentang kehidupan dan karir Steve Jobs, pendiri Apple, berdasarkan wawancara eksklusif.",
        cover: "Logo.jpg",
        rating: 5,
        popularity: 89
    },
    {
        id: 8,
        title: "A Brief History of Time",
        author: "Stephen Hawking",
        category: "science",
        year: 2020,
        isbn: "978-0553380163",
        pages: 256,
        status: "available",
        description: "Penjelasan yang dapat diakses tentang kosmologi modern, dari Big Bang hingga lubang hitam dan perjalanan waktu.",
        cover: "Logo.jpg",
        rating: 5,
        popularity: 86
    },
    {
        id: 9,
        title: "The Art of War",
        author: "Sun Tzu",
        category: "history",
        year: 2021,
        isbn: "978-1599869773",
        pages: 273,
        status: "available",
        description: "Teks klasik strategi militer Cina yang telah diadaptasi untuk bisnis dan kehidupan sehari-hari.",
        cover: "Logo.jpg",
        rating: 4,
        popularity: 75
    },
    {
        id: 10,
        title: "Design Patterns",
        author: "Gang of Four",
        category: "programming",
        year: 2023,
        isbn: "978-0201633612",
        pages: 395,
        status: "reserved",
        description: "Panduan fundamental tentang design patterns dalam pengembangan perangkat lunak berorientasi objek.",
        cover: "Logo.jpg",
        rating: 4,
        popularity: 83
    },
    {
        id: 11,
        title: "Atomic Habits",
        author: "James Clear",
        category: "business",
        year: 2024,
        isbn: "978-0735211292",
        pages: 320,
        status: "available",
        description: "Panduan praktis untuk membangun kebiasaan baik dan menghilangkan kebiasaan buruk melalui perubahan kecil yang konsisten.",
        cover: "Logo.jpg",
        rating: 5,
        popularity: 92
    },
    {
        id: 12,
        title: "The Psychology of Computer Programming",
        author: "Gerald M. Weinberg",
        category: "programming",
        year: 2019,
        isbn: "978-0932633420",
        pages: 288,
        status: "borrowed",
        description: "Eksplorasi aspek manusia dalam pengembangan perangkat lunak dan bagaimana psikologi mempengaruhi proses programming.",
        cover: "Logo.jpg",
        rating: 4,
        popularity: 71
    }
];

// Global variables
let currentBooks = [...booksData];
let currentPage = 1;
const booksPerPage = 8;
let currentView = 'grid';

// Initialize the page
document.addEventListener('DOMContentLoaded', function() {
    displayBooks();
    setupEventListeners();
    updateResultsCount();
});

// Setup all event listeners
function setupEventListeners() {
    // Search form
    document.getElementById('cari').addEventListener('submit', handleSearch);
    document.getElementById('input-pencarian').addEventListener('input', debounce(handleSearch, 300));
    
    // Filters
    document.getElementById('filter-kategori').addEventListener('change', applyFilters);
    document.getElementById('yearFilter').addEventListener('change', applyFilters);
    document.getElementById('statusFilter').addEventListener('change', applyFilters);
    document.getElementById('hapusfilter').addEventListener('click', clearAllFilters);
    
    // View toggle
    document.getElementById('gridView').addEventListener('click', () => switchView('grid'));
    document.getElementById('listView').addEventListener('click', () => switchView('list'));
    
    // Sort
    document.getElementById('sortSelect').addEventListener('change', applySorting);
    
    // Modal close
    document.getElementById('bookModal').addEventListener('click', function(e) {
        if (e.target === this) closeBookModal();
    });
}

// Handle search
function handleSearch(e) {
    if (e.type === 'submit') {
        e.preventDefault();
    }
    
    showLoading();
    
    setTimeout(() => {
        applyFilters();
    }, 500);
}

// Apply all filters
function applyFilters() {
    const searchTerm = document.getElementById('input-pencarian').value.toLowerCase();
    const categoryFilter = document.getElementById('filter-kategori').value;
    const yearFilter = document.getElementById('yearFilter').value;
    const statusFilter = document.getElementById('statusFilter').value;

    currentBooks = booksData.filter(book => {
        const matchesSearch = !searchTerm || 
            book.title.toLowerCase().includes(searchTerm) ||
            book.author.toLowerCase().includes(searchTerm) ||
            book.isbn.includes(searchTerm);
        
        const matchesCategory = !categoryFilter || book.category === categoryFilter;
        
        const matchesYear = !yearFilter || 
            (yearFilter === 'older' ? book.year < 2020 : book.year.toString() === yearFilter);
        
        const matchesStatus = !statusFilter || book.status === statusFilter;

        return matchesSearch && matchesCategory && matchesYear && matchesStatus;
    });

    applySorting();
    currentPage = 1;
    displayBooks();
    updateResultsCount();
    hideLoading();
}

// Apply sorting
function applySorting() {
    const sortBy = document.getElementById('sortSelect').value;
    
    currentBooks.sort((a, b) => {
        switch (sortBy) {
            case 'title':
                return a.title.localeCompare(b.title);
            case 'author':
                return a.author.localeCompare(b.author);
            case 'year':
                return b.year - a.year;
            case 'popular':
                return b.popularity - a.popularity;
            default:
                return 0;
        }
    });
}

// Switch between grid and list view
function switchView(view) {
    currentView = view;
    
    document.querySelectorAll('.view-btn').forEach(btn => {
        btn.classList.remove('active');
    });
    document.getElementById(view + 'View').classList.add('active');
    
    if (view === 'grid') {
        document.getElementById('booksGrid').style.display = 'grid';
        document.getElementById('booksList').style.display = 'none';
    } else {
        document.getElementById('booksGrid').style.display = 'none';
        document.getElementById('booksList').style.display = 'flex';
    }
    
    displayBooks();
}

// Display books
function displayBooks() {
    const startIndex = (currentPage - 1) * booksPerPage;
    const endIndex = startIndex + booksPerPage;
    const booksToShow = currentBooks.slice(startIndex, endIndex);

    if (booksToShow.length === 0) {
        showEmptyState();
        return;
    }

    hideEmptyState();

    const gridContainer = document.getElementById('booksGrid');
    const listContainer = document.getElementById('booksList');
    
    gridContainer.innerHTML = '';
    listContainer.innerHTML = '';

    booksToShow.forEach(book => {
        const bookCard = createBookCard(book);
        gridContainer.appendChild(bookCard.cloneNode(true));
        
        const listCard = createBookCard(book, true);
        listContainer.appendChild(listCard);
    });

    generatePagination();
    addBookCardEventListeners();
}

// Create book card
function createBookCard(book, isListView = false) {
    const card = document.createElement('div');
    card.className = `book-card${isListView ? ' list-view' : ''}`;
    card.dataset.bookId = book.id;

    const statusClass = `status-${book.status}`;
    const statusText = {
        available: 'Tersedia',
        borrowed: 'Dipinjam',
        reserved: 'Direservasi'
    }[book.status];

    const actionButton = book.status === 'available' 
        ? `<button class="action-btn btn-primary" onclick="bookingBook(${book.id})">📅 Booking</button>`
        : `<button class="action-btn btn-disabled" disabled>Tidak Tersedia</button>`;

    card.innerHTML = `
        <div class="book-cover">
            <img src="${book.cover}" alt="${book.title}" onerror="this.src='https://via.placeholder.com/200x300/666666/FFFFFF?text=No+Image'">
        </div>
        <div class="book-info">
            <h3 class="book-title">${book.title}</h3>
            <p class="book-author">oleh ${book.author}</p>
            <div class="book-meta">
                <span class="book-category">${getCategoryName(book.category)}</span>
                <span class="book-year">${book.year}</span>
            </div>
            <div class="book-status">
                <span class="status-indicator ${statusClass}"></span>
                <span class="status-text">${statusText}</span>
            </div>
            <div class="book-actions">
                ${actionButton}
                <button class="action-btn btn-secondary" onclick="openBookModal(${book.id})">Detail</button>
            </div>
        </div>
    `;

    return card;
}

// Add event listeners to book cards
function addBookCardEventListeners() {
    document.querySelectorAll('.book-card').forEach(card => {
        const bookCover = card.querySelector('.book-cover');
        const bookTitle = card.querySelector('.book-title');
        
        [bookCover, bookTitle].forEach(element => {
            element.style.cursor = 'pointer';
            element.addEventListener('click', () => {
                const bookId = parseInt(card.dataset.bookId);
                openBookModal(bookId);
            });
        });
    });
}

// Get category display name
function getCategoryName(category) {
    const categories = {
        programming: 'Programming',
        design: 'Design',
        business: 'Bisnis',
        science: 'Sains',
        fiction: 'Fiksi',
        biography: 'Biografi',
        history: 'Sejarah'
    };
    return categories[category] || category;
}

// Generate pagination
function generatePagination() {
    const totalPages = Math.ceil(currentBooks.length / booksPerPage);
    const paginationContainer = document.getElementById('pagination');
    
    if (totalPages <= 1) {
        paginationContainer.innerHTML = '';
        return;
    }

    let paginationHTML = '';
    
    // Previous button
    paginationHTML += `
        <button class="page-btn" ${currentPage === 1 ? 'disabled' : ''} 
                onclick="changePage(${currentPage - 1})">‹ Sebelumnya</button>
    `;
    
    // Page numbers
    for (let i = 1; i <= totalPages; i++) {
        if (i === 1 || i === totalPages || (i >= currentPage - 2 && i <= currentPage + 2)) {
            paginationHTML += `
                <button class="page-btn ${i === currentPage ? 'active' : ''}" 
                        onclick="changePage(${i})">${i}</button>
            `;
        } else if (i === currentPage - 3 || i === currentPage + 3) {
            paginationHTML += `<span class="page-btn">...</span>`;
        }
    }
    
    // Next button
    paginationHTML += `
        <button class="page-btn" ${currentPage === totalPages ? 'disabled' : ''} 
                onclick="changePage(${currentPage + 1})">Selanjutnya ›</button>
    `;

    paginationContainer.innerHTML = paginationHTML;
}

// Change page
function changePage(page) {
    const totalPages = Math.ceil(currentBooks.length / booksPerPage);
    if (page >= 1 && page <= totalPages) {
        currentPage = page;
        displayBooks();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
}

// Open book modal
function openBookModal(bookId) {
    const book = booksData.find(b => b.id === bookId);
    if (!book) return;

    // Update modal image
    const modalImage = document.getElementById('modalBookImage');
    modalImage.src = book.cover;
    modalImage.alt = book.title;
    modalImage.onerror = function() {
        this.src = 'https://via.placeholder.com/200x300/666666/FFFFFF?text=No+Image';
    };

    document.getElementById('modalBookTitle').textContent = book.title;
    document.getElementById('modalBookAuthor').textContent = `oleh ${book.author}`;
    document.getElementById('modalBookCategory').textContent = getCategoryName(book.category);
    document.getElementById('modalBookYear').textContent = book.year;
    document.getElementById('modalBookISBN').textContent = book.isbn;
    document.getElementById('modalBookPages').textContent = `${book.pages} halaman`;
    document.getElementById('modalBookStatus').textContent = {
        available: 'Tersedia',
        borrowed: 'Dipinjam',
        reserved: 'Direservasi'
    }[book.status];
    document.getElementById('modalBookRating').textContent = '⭐'.repeat(book.rating);
    document.getElementById('modalBookDescription').textContent = book.description;

    const bookingBtn = document.getElementById('modalBookingBtn');
    if (book.status === 'available') {
        bookingBtn.disabled = false;
        bookingBtn.className = 'action-btn btn-primary';
        bookingBtn.onclick = () => bookingBook(bookId);
    } else {
        bookingBtn.disabled = true;
        bookingBtn.className = 'action-btn btn-disabled';
        bookingBtn.textContent = 'Tidak Tersedia';
    }

    document.getElementById('bookModal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

// Close book modal
function closeBookModal() {
    document.getElementById('bookModal').style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Booking book function
function bookingBook(bookId) {
    const book = booksData.find(b => b.id === bookId);
    if (!book || book.status !== 'available') {
        alert('Buku tidak tersedia untuk dibooking.');
        return;
    }

    const confirmBooking = confirm(`Apakah Anda yakin ingin booking buku "${book.title}"?\n\nBuku akan direservasi untuk Anda selama 3 hari.`);
    
    if (confirmBooking) {
        // Update book status
        book.status = 'reserved';
        
        // Store booking data
        const bookingData = {
            bookId: bookId,
            bookTitle: book.title,
            bookAuthor: book.author,
            userId: window.currentUser?.id || 'USER001',
            bookingDate: new Date().toISOString(),
            pickupDeadline: new Date(Date.now() + 3 * 24 * 60 * 60 * 1000).toISOString(),
            status: 'active'
        };

        // Store booking (in real app, this would be sent to server)
        if (!window.userBookings) {
            window.userBookings = [];
        }
        window.userBookings.push(bookingData);

        alert(`✅ Booking berhasil!\n\nBuku: ${book.title}\nHarus diambil sebelum: ${new Date(bookingData.pickupDeadline).toLocaleDateString('id-ID')}\n\nSilakan datang ke perpustakaan untuk mengambil buku Anda.`);
        
        // Close modal and refresh display
        closeBookModal();
        displayBooks();
    }
}

// Clear all filters
function clearAllFilters() {
    document.getElementById('input-pencarian').value = '';
    document.getElementById('filter-kategori').value = '';
    document.getElementById('yearFilter').value = '';
    document.getElementById('statusFilter').value = '';
    
    currentBooks = [...booksData];
    currentPage = 1;
    displayBooks();
    updateResultsCount();
}

// Update results count
function updateResultsCount() {
    document.getElementById('resultsCount').textContent = currentBooks.length;
    document.getElementById('totalBooks').textContent = booksData.length;
}

// Show loading state
function showLoading() {
    document.getElementById('loadingSpinner').style.display = 'flex';
    document.getElementById('booksGrid').style.display = 'none';
    document.getElementById('booksList').style.display = 'none';
    document.getElementById('emptyState').style.display = 'none';
    document.getElementById('pagination').style.display = 'none';
}

// Hide loading state
function hideLoading() {
    document.getElementById('loadingSpinner').style.display = 'none';
    document.getElementById('pagination').style.display = 'flex';
    
    if (currentView === 'grid') {
        document.getElementById('booksGrid').style.display = 'grid';
    } else {
        document.getElementById('booksList').style.display = 'flex';
    }
}

// Show empty state
function showEmptyState() {
    document.getElementById('emptyState').style.display = 'block';
    document.getElementById('booksGrid').style.display = 'none';
    document.getElementById('booksList').style.display = 'none';
    document.getElementById('pagination').style.display = 'none';
}

// Hide empty state
function hideEmptyState() {
    document.getElementById('emptyState').style.display = 'none';
}

// Debounce function for search input
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Keyboard shortcuts
document.addEventListener('keydown', function(e) {
    // Escape key to close modal
    if (e.key === 'Escape') {
        closeBookModal();
    }
    
    // Ctrl/Cmd + K for search focus
    if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
        e.preventDefault();
        document.getElementById('input-pencarian').focus();
    }
    
    // Arrow keys for pagination
    if (e.key === 'ArrowLeft' && e.altKey) {
        e.preventDefault();
        if (currentPage > 1) {
            changePage(currentPage - 1);
        }
    }
    
    if (e.key === 'ArrowRight' && e.altKey) {
        e.preventDefault();
        const totalPages = Math.ceil(currentBooks.length / booksPerPage);
        if (currentPage < totalPages) {
            changePage(currentPage + 1);
        }
    }
});

// Handle browser back/forward navigation
window.addEventListener('popstate', function(e) {
    if (e.state && e.state.page) {
        currentPage = e.state.page;
        displayBooks();
    }
});

// Add scroll to top button
function addScrollToTopButton() {
    const scrollBtn = document.createElement('button');
    scrollBtn.innerHTML = '↑';
    scrollBtn.className = 'scroll-to-top';
    
    document.body.appendChild(scrollBtn);
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollBtn.style.opacity = '1';
        } else {
            scrollBtn.style.opacity = '0';
        }
    });
    
    scrollBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

// Enhanced initialization
document.addEventListener('DOMContentLoaded', function() {
    displayBooks();
    setupEventListeners();
    updateResultsCount();
    
    // Add scroll to top button
    addScrollToTopButton();
});

// Accessibility improvements
document.addEventListener('DOMContentLoaded', function() {
    // Add ARIA labels
    document.getElementById('input-pencarian').setAttribute('aria-label', 'Cari buku berdasarkan judul, penulis, atau ISBN');
    document.getElementById('filter-kategori').setAttribute('aria-label', 'Filter berdasarkan kategori');
    document.getElementById('yearFilter').setAttribute('aria-label', 'Filter berdasarkan tahun');
    document.getElementById('statusFilter').setAttribute('aria-label', 'Filter berdasarkan status ketersediaan');
    
    // Add role attributes
    document.getElementById('booksGrid').setAttribute('role', 'grid');
    document.getElementById('booksList').setAttribute('role', 'list');
});