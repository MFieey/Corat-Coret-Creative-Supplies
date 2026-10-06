<?php
$id = $_GET['id'];
$dataMember = $koneksi->query("SELECT * FROM `tb_pelanggan` WHERE pelanggan_id = '$id' ")->fetch_assoc();
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
                    <h1 class="text-center"> Data Transaksi <?php echo ucfirst($dataMember['pelanggan_nama']) ?></h1>
                    <div class="cart-view-table">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Transaksi</th>
                                        <th>Tanggal Pembelian</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $ambilDataTrx = $koneksi->query("SELECT * FROM `tb_pembelian` WHERE pelanggan_id = '$id'");
                                    while ($pecahTrx = $ambilDataTrx->fetch_assoc()) :
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $pecahTrx['pembelian_id'] ?></td>
                                            <td><?php echo $pecahTrx['pembelian_tgl'] ?></td>
                                            <td><?php echo $pecahTrx['pembelian_status'] ?></td>
                                            <td><?php echo $pecahTrx['pembelian_total'] ?></td>
                                            <td>
                                                <a target="_blank" href="pages/cetak.php?id=cetak&id=<?php echo $pecahTrx['pembelian_id'] ?>" class="btn btn-primary btn-sm">Cetak</a>

                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
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

        <ul class="nav nav-tabs aa-products-tab">
            <li class="active"><a href="#men" data-toggle="tab">Rekomendasi Produk</a></li>
        </ul>
        <div class="col-md-12 owl-carousel">
            <?php
            $ambil = $koneksi->query("SELECT * FROM tb_produk");
            while ($pecah = $ambil->fetch_assoc()) {
            ?>
                <div class="thumbnail">
                    <img src="admin/images/produk/<?php echo $pecah['produk_foto'] ?>" alt="">
                    <p class="caption">
                        <center>
                            <h4><?php echo $pecah['produk_nama'] ?></h4>
                            <?php echo rupiah($pecah['produk_harga']) ?> <br>
                            <a href="index.php?page=beli&id=<?php echo $pecah['produk_id'] ?>" class="btn btn-primary">Beli</a>
                        </center>
                    </p>
                </div>
            <?php } ?>
        </div>
        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        </script>
    </div>
</section>