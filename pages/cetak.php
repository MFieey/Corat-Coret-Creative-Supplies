<?php
include '../component/koneksi.php';
$id = $_GET['id'];
$dataTrx = $koneksi->query("SELECT * FROM `tb_pembelian` JOIN tb_pelanggan ON  tb_pembelian.pelanggan_id=tb_pelanggan.pelanggan_id WHERE tb_pembelian.pembelian_id = '$id' ")->fetch_assoc();
?>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cetak Transaksi</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
</head>

<body style="margin-left: 100px;margin-right: 100px;" onload="window.print()">
    <div class="container">
        <div class="row" style="margin-top: 50px;">
            <div class="col-xs-4 text-center">
                <img src="../assets/img/indexlogo1.jpg" width="270" height="120" alt="">
            </div>
            <div class="col-xs-8">
                <h3 style="margin-bottom: 0px;">Fathur Accesories</h3>
                <p>
                    Alamat : Jl. Raya Lubuk Begalung 16-35, Lubuk Begalung Nan XX, Kec. Lubuk Begalung, Kota Padang, Sumatera Barat<br>
                    No HP: 0822-8367-9252
                </p>
            </div>
            <h1 class="text-center"> Transaksi No <?php echo $dataTrx['pembelian_id'] ?></h1>
            <div class="row">
                <div class="col-xs-6">
                    Nama Pelanggan : <?php echo $dataTrx['pelanggan_nama'] ?> <br>
                    Jenis Kelamin : <?php echo $dataTrx['pelanggan_jk'] ?> <br>
                    Alamat : <?php echo $dataTrx['pelanggan_alamat'] ?> <br>
                    No HP : <?php echo $dataTrx['pelanggan_nohp'] ?> <br>
                </div>
                <div class="col-xs-6">
                    Tanggal Belanja : <?php echo $dataTrx['pembelian_tgl'] ?> <br>
                    Total Belanja : <?php echo rupiah($dataTrx['pembelian_total'])?>
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
                                @$total += $pecahTrx['pembelian_sub_harga'];
                            ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $dataProduk['produk_nama'] ?></td>
                                    <td><?php echo rupiah($pecahTrx['pembelian_produk_harga']) ?></td>
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
            </div>

            <div class="row">
                <div class="col-md-4 col-xs-4"></div>
                <div class="col-md-4 col-xs-4"></div>
                <div class="col-md-4 col-xs-4">
                    <p>
                        Padang, <?php echo date('d-m-Y') ?>
                    </p>
                    <br>
                    <br>
                    <br>
                    <h4>Pimpinan</h4>
                </div>
            </div>
        </div>
    </div>
    <?php include '../component/script.php' ?>
</body>

</html>