<?php
$id = $_GET['id'];
if (isset($_SESSION['keranjang'][$id])) {
    $_SESSION['keranjang'][$id] -= 1;
} else {
    if ($_SESSION['keranjang'][$id] == 0) {
        unset($_SESSION['keranjang'][$id]);
    }
}
echo "
<script>
alert('Produk telah di kurangi')
location='index.php?page=keranjang'
</script>
";
