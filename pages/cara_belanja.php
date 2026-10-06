<section id="aa-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-contact-area">
                    <div class="aa-contact-top">
                        <h2>Cara Pembelian</h2>
                        <style>
                        /* Flexbox untuk tata letak gambar dan teks */
                        .payment-container {
                            display: flex; /* Tata letak dalam satu baris */
                            align-items: flex-start; /* Menjaga teks rata atas */
                            margin-bottom: 20px; /* Spasi antar bagian */
                            margin-top: 30px;
                        }

                        /* Gaya untuk gambar */
                        .payment-image {
                            width: 150px; /* Lebar gambar */
                            height: 150px; /* Tinggi gambar */
                            background-color: #e0e0e0; /* Placeholder untuk gambar */
                            margin-right: 20px; /* Jarak antara gambar dan teks */
                        }

                        /* Gaya untuk bagian teks */
                        .payment-content {
                            flex-grow: 1; /* Memungkinkan teks berkembang */
                            text-align: justify; /* Meratakan teks */
                        }

                        .payment-header {
                            font-weight: bold; /* Judul bagian tebal */
                            font-size: 1.5em; /* Ukuran judul bagian */
                        }

                        .payment-text {
                            padding: 10px 0; /* Jarak antara teks */
                            border-bottom: 1px solid #ccc; /* Garis pemisah antara bagian */
                        }
                    </style>

                    <!-- Bagian Pembayaran di Toko -->
                    <div class="payment-container">
                        <!-- Tempat untuk gambar -->
                        <div class="payment-image">
                            <img src="assets/img/profil1.jpg" width= "150px" height= "150px" alt="" class="">
                        </div>

                        <!-- Teks untuk Pembayaran di Toko -->
                        <div class="payment-content">
                            <div class="payment-header">Pembayaran di Toko</div>
                            <div class="payment-text">
                                Anda dapat melakukan pembayaran langsung di toko kami di Alai Parak Kopi pada Jl. Gajah Mada 9-29, Alai Parak Kopi, Kec. Padang Utara, Kota Padang, <br>Atau cabang kami di Lubuk Begalung pada Jl. Raya Lubuk Begalung 16-35, Lubuk Begalung Nan XX, Kec. Lubuk Begalung, (Disamping kampus UPI YPTK Padang,  Sebelah BSI).
                            </div>
                        </div>
                    </div>

                    <!-- Bagian Transfer Bank -->
                    <div class="payment-container">
                        <!-- Tempat untuk gambar -->
                        <div class="payment-image">
                            <img src="assets/img/bank2.png" width= "150px" height= "150px" alt="" class="">
                        </div>

                        <!-- Teks untuk Transfer Bank -->
                        <div class="payment-content">
                            <div class="payment-header">Transfer Bank</div>
                            <div class="payment-text">
                                Anda dapat melakukan pembayaran melalui transfer bank. Informasi rekening bank kami akan diberikan saat Anda sudah di toko kami. Setelah melakukan transfer, harap kirimkan bukti pembayaran kepada kasir toko untuk mengupdate status pembayaran anda.
                            </div>
                        </div>
                    </div>

                    <!-- Bagian Pembayaran Digital -->
                    <div class="payment-container">
                        <!-- Tempat untuk gambar -->
                        <div class="payment-image">
                            <img src="assets/img/emoney.jpg" width= "150px" height= "150px" alt="" class="">
                        </div>

                        <!-- Teks untuk Pembayaran Digital -->
                        <div class="payment-content">
                            <div class="payment-header">Pembayaran Digital</div>
                            <div class="payment-text">
                                Kami juga menerima pembayaran melalui aplikasi pembayaran digital seperti GoPay, OVO, atau Dana. Untuk melakukan pembayaran, Anda dapat menggunakan QRIS yang ada di toko, dan jangan lupa mengirimkan bukti pembayaran kepada kasir toko untuk mengupdate status pembayaran anda.
                            </div>
                        </div>
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