<?php
if (empty($_SESSION['keranjang'])) {
    echo "<script>
    alert('Keranjang kosong, Silahkan belanja')
    location='index.php'
    </script>";
}

?>
<section id="cart-view">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart-view-area">
                    <h1 class="text-center"> Keranjang Anda</h1>
                    <div class="cart-view-table">
                        <form action="">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Deskripsi</th>
                                            <th>Jumlah</th>
                                            <th>Sub Total</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($_SESSION['keranjang'] as $key => $value) :
                                            $data = $koneksi->query("SELECT * FROM tb_produk WHERE produk_id = '$key'")->fetch_assoc();
                                            // // Cari Diskon
                                            // $persenDiskon = $data['produk_diskon'] / 100;
                                            // //Cari Harga Diskon 
                                            // $jumlahDiskon = $data['produk_harga'] * $persenDiskon;

                                            // // Harga - diskon
                                            // $diskon = $data['produk_harga'] - $jumlahDiskon;
                                            // @$subHarga = $value * $diskon;
                                            // @$totalDiskon = $value * $jumlahDiskon;
                                            // @$total += $subHarga;

                                            // Cari Total Harga
                                            $subharga = $data['produk_harga'] * $value;
                                            @$totalharga += $subharga ;

                                            // Pengurangan Stock
                                            $substok = $data['produk_stok'] - $value;
                                            @$sisastok = $substok; 


                                            //Deskripsi
                                            $deskripsi = $data['produk_deskripsi'];

                                        ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $data['produk_nama'] ?></td>
                                                <td><?php echo rupiah($data['produk_harga']) ?></td>
                                                <td><?php echo $data['produk_deskripsi'] ?></td>

                                                <td>
                                                    <a href="index.php?page=beli&id=<?php echo $data['produk_id'] ?>"><span class="fa fa-plus-circle"></span> </a>
                                                    <?php echo $value ?>
                                                    <a href="index.php?page=kurang&id=<?php echo $data['produk_id'] ?>"> <span class="fa fa-minus-circle"></span></a>
                                                </td>
                                                <td><?php echo rupiah($subharga) ?></td>
                                                <td><a href="index.php?page=hapus&id=<?php echo $data['produk_id'] ?>" class="btn btn-danger"> HAPUS </a>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <!-- Cart Total view -->
                        <div class="cart-view-total">
                            <h4>Total Belanja</h4>
                            <table class="aa-totals-table">
                                <tbody>
                                    <tr>
                                        <th>Total</th>
                                        <td><?php echo rupiah($totalharga) ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="index.php?page=checkout&total=<?php echo $totalharga ?>" class="aa-cart-view-btn">Proced to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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