<?php
$total = $_GET['total'];
$keranjang = $_SESSION['keranjang'];
$idPelanggan = $_SESSION['member']['pelanggan_id'];
$tgl = date('Y-m-d');

$koneksi->query("INSERT INTO `tb_pembelian`(`pelanggan_id`, 
                                            `pembelian_tgl`, 
                                            `pembelian_total`) 
                                            VALUES 
                                            ('$idPelanggan',
                                            '$tgl',
                                            '$total'
                                            )");
$theLastId = $koneksi->insert_id;

foreach ($keranjang as $id => $jumlah) {

    $data = $koneksi->query("SELECT * FROM `tb_produk` WHERE produk_id = '$id'")->fetch_assoc();

    $persenDiskon = $data['produk_diskon'] / 100;
    $jumlahDiskon = $data['produk_harga'] * $persenDiskon;
    $diskon = $data['produk_harga'] - $jumlahDiskon;
    @$subHarga = $jumlah * $diskon;

    $produk = $data['produk_id'];
    $koneksi->query("INSERT INTO `tb_pembelian_produk`( `pembelian_id`, 
                                                        `produk_id`, 
                                                        `pembelian_produk_jumlah`, 
                                                        `pembelian_produk_harga`, 
                                                        `pembelian_sub_harga`)
                                                         VALUES 
                                                         ('$theLastId',
                                                         '$produk',
                                                         '$jumlah',
                                                         '$diskon',
                                                         '$subHarga')");
}
unset($_SESSION['keranjang']);
echo "<script>
alert('Pembelian Sukses')
location='index.php?page=nota&id=$theLastId'
</script>";
