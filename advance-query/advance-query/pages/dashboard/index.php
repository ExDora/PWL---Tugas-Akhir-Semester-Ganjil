<?php
session_start();
require_once '../../actions/products/get-products.php';
require_once '../../actions/products/get-total-products.php';
require_once '../../actions/users/get-total-users.php';

if (!isset($_SESSION['user'])) {
    header('Location: ../login/index.php');
    exit;
}

$user = $_SESSION['user'];

$products = getProducts($_GET);

$currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../styles/dashboard/index.css">
</head>

<body>
    <header class="topbar">
        <h2 class="logo">MyApp</h2>
        <nav>
            <a href="#">Dashboard</a>
            <a href="#">Profil</a>
            <a href="#">Pengaturan</a>
            <a onclick="return confirm('Are you sure to logout from this app?')" href="../../actions/auth/logout.php"
                class="logout">Logout</a>
        </nav>
    </header>

    <main class="content">
        <section class="welcome">
            <h1>Selamat Datang 👋</h1>
            <p>Hai, <strong><?= $user['name'] ?></strong>! Senang melihatmu kembali.</p>
        </section>

        <section class="cards">
            <div class="card">
                <h3>Total Pengguna</h3>
                <p>
                    <?= $totalUsers ?>
                </p>
            </div>
            <div class="card">
                <h3>Total Produk</h3>
                <p>
                    <?= $totalProducts ?>
                </p>
            </div>
        </section>

        <section class="produk-section">
            <h2>Daftar Produk</h2>
            <form method="GET" class="filter-box">
                <input name="keyword" type="text" placeholder="Cari produk..." />
                <button>Cari</button>
            </form>
            <table class="produk-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $index => $product): ?>
                        <tr>
                            <td>
                                <?= $index + 1 ?>
                            </td>
                            <td>
                                <?= $product['name'] ?>
                            </td>
                            <td>
                                <?= $product['category'] ?>
                            </td>
                            <td>
                                <?= $product['stock'] ?>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="pagination">
                <a href="?page=<?= $currentPage -1 ?>">Prev</a>
                <a href="?page<?= $currentPage +1 ?>">Next</a>
            </div>
        </section>
    </main>
</body>

</html>