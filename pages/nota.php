<?php
$id = $_GET['id'];
$dataTrx = $koneksi->query("SELECT * FROM `tb_pembelian` JOIN tb_pelanggan ON  tb_pembelian.pelanggan_id=tb_pelanggan.pelanggan_id WHERE tb_pembelian.pembelian_id = '$id' ")->fetch_assoc();
// var_dump($dataTrx);
?>
<?php
if (empty($_SESSION['member'])) {
    echo "<script>
    alert('Anda Harus Login Dahulu')
    location='index.php?page=login'
    </script>";
}
?>
<section id="cart-view">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart-view-area">
                    <h1 class="text-center"> Transaksi No <?php echo $dataTrx['pembelian_id'] ?></h1>
                    <div class="row">
                        <div class="col-md-6">
                            Nama Pelanggan : <?php echo $dataTrx['pelanggan_nama'] ?> <br>
                            Jenis Kelamin : <?php echo $dataTrx['pelanggan_jk'] ?> <br>
                            Alamat : <?php echo $dataTrx['pelanggan_alamat'] ?> <br>
                            No HP : <?php echo $dataTrx['pelanggan_nohp'] ?> <br>
                        </div>
                        <div class="col-md-6">
                            Tanggal Belanja : <?php echo tgl_indo($dataTrx['pembelian_tgl']) ?> <br>
                            Total Belanja : <?php echo rupiah($dataTrx['pembelian_total']) ?>
                            <a target="_blank" href="pages/cetak.php?id=<?php echo $id ?>" class="aa-cart-view-btn">Cetak Transaksi</a>
                        </div>
                    </div>
                    <div class="cart-view-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $ambilDataTrx = $koneksi->query("SELECT * FROM tb_pembelian_produk WHERE pembelian_id = '$dataTrx[pembelian_id]'");

                                    while ($pecahTrx = $ambilDataTrx->fetch_assoc()) :
                                        $dataProduk = $koneksi->query("SELECT * FROM tb_produk WHERE produk_id = '$pecahTrx[produk_id]'")->fetch_assoc();
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $dataProduk['produk_nama'] ?></td>
                                            <td><?php echo rupiah($dataProduk['produk_harga']) ?></td>
                                            <td><?php echo $pecahTrx['pembelian_produk_jumlah'] ?></td>
                                            <td><?php echo rupiah($pecahTrx['pembelian_sub_harga']) ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                                <tr>
                                    <td colspan="4"> Total</td>
                                    <td><?php echo rupiah($dataTrx['pembelian_total']) ?></td>
                                </tr>
                            </table>
                        </div>
                        <!-- Cart Total view -->
                        <!-- <div class="cart-view-total">
                            <h4>Total Belanja</h4>
                            <table class="aa-totals-table">
                                <tbody>
                                    <tr>
                                        <th>Total</th>
                                        <td><?php echo $total ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="index.php?page=checkout&total=<?php echo $total ?>" class="aa-cart-view-btn">Proced to Checkout</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>