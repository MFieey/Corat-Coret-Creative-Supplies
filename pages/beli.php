<?php
if (!empty($_SESSION['member'])) {
    $id = $_GET['id'];
    if (isset($_SESSION['keranjang'][$id])) {
        $_SESSION['keranjang'][$id] += 1;
    } else {
        $_SESSION['keranjang'][$id] = 1;
    }
    echo "
    <script>
    alert('Produk telah masuk ke keranjang')
    location='index.php?page=keranjang'
    </script>
    </script>
    ";
} else {
    echo "
    <script>
    alert('Anda harus login terlebih dahulu')
    location='index.php?page=login'
    </script>
    </script>
    ";
}
