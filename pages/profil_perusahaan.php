<section id="aa-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-contact-area">
                    <div class="aa-contact-top">
                        <h2>Profil Perusahaan</h2></br></br>
                        <style>
                        /* Flexbox untuk tata letak gambar dan teks */
                        .profile-container {
                            display: flex; /* Tata letak dalam satu baris */
                            align-items: flex-start; /* Menjaga teks di bagian atas */
                        }

                        /* Gaya untuk bagian gambar */
                        .profile-image {
                            width: 200px; /* Lebar gambar */
                            height: 200px; /* Tinggi gambar */
                            background-color: #e0e0e0; /* Warna latar belakang placeholder gambar */
                            margin-right: 30px; /* Jarak antara gambar dan teks */
                            text-align: center; /* Pusatkan teks dalam placeholder gambar */
                        }

                        /* Gaya untuk teks profil */
                        .profile-content {
                            flex-grow: 1; /* Memungkinkan teks meluas */
                            text-align: justify; /* Meratakan teks secara justify */
                        }

                        /* Gaya untuk setiap bagian */
                        .profile-section {
                            padding: 10px 0; /* Jarak antara bagian */
                            border-bottom: 1px solid #ccc; /* Garis pemisah antara bagian */
                        }

                        .profile-header {
                            font-weight: bold; /* Judul bagian dibuat tebal */
                            font-size: 1.5em; /* Ukuran judul bagian */
                        }

                        .profile-text {
                            margin-left: 40px; /* Menggeser teks lebih ke kanan */
                            text-align: justify;
                        }
                        .product-section {
                            padding: 10px 0; /* Jarak antara bagian */
                            border-bottom: 1px solid #ccc; /* Garis pemisah antara bagian */
                        }

                        .product-row {
                            display: flex; /* Mengatur elemen dalam satu baris */
                            justify-content: flex-start; /* Rata kiri */
                            align-items: center; /* Rata vertikal */
                            margin-bottom: 5px; /* Jarak antar baris */
                        }

                        .product-label {
                            width: 150px; /* Lebar label */
                            font-weight: bold; /* Membuat teks tebal */
                        }

                        .product-colon {
                            margin-right: 10px; /* Spasi setelah titik dua */
                        }

                        .product-value {
                            flex-grow: 1; /* Memungkinkan nilai meluas sesuai kebutuhan */
                        }
                        /* Menyusun gambar secara vertikal */

                        .image-wrapper {
                            display: block; /* Menjaga gambar dalam blok yang terpisah */
                            padding: 10px; /* Spasi di sekitar gambar */
                        }

                        .image {
                            width: 200px; /* Lebar gambar */
                            height: 250px; /* Tinggi gambar */
                            background-color: #e0e0e0; /* Placeholder untuk gambar */
                            text-align: center; /* Mengatur teks dalam placeholder */
                        }

                        .image-separator {
                            margin-bottom: 150px; /* Jarak antara gambar pertama dan kedua */
                        }
    
                    </style>
                </head>
                <body>
                    <!-- Container untuk gambar dan teks -->
                    <div class="profile-container">
                        <!-- Bagian untuk gambar -->
                        <div class="image-wrapper">
                        <!-- Gambar pertama -->
                        <div class="image image-separator">
                            <img src="assets/img/profil2.jpg" width= "200px" height= "240px" alt="" class="">
                        </div>

                        <!-- Gambar kedua di bawah gambar pertama -->
                        <div class="image">
                            <img src="assets/img/profil3.jpg" width= "200px" height= "240px" alt="" class="">
                        </div>
                    </div>

                        <!-- Bagian untuk teks -->
                        <div class="profile-content">
                            <!-- Sejarah perusahaan -->
                            <div class="profile-section">
                                <div class="profile-header">Sejarah Perusahaan</div>
                                <div class="profile-text">
                                    Fathur Accessories & Electronics didirikan pada tahun 2018 di Pondok sebagai toko kecil yang menjual aksesoris ponsel. Seiring waktu, perusahaan ini berkembang dan pindah ke lokasi yang lebih besar di Alai Parak Kopi. Pada tahun 2022, perusahaan membuka cabang di Lubuk Begalung, dekat kampus UPI YPTK Padang, untuk menjangkau pelanggan yang lebih luas. Dengan komitmen pada kualitas dan layanan pelanggan yang ramah, perusahaan ini terus berkembang.
                                </div>
                            </div>

                           

                            <!-- Produk dan layanan -->
                            <div class="profile-section">
                                <div class="profile-header">Produk & Layanan</div>
                                <div class="profile-text">
                            <!-- Baris untuk setiap produk/layanan -->

                            

                            <div class="product-row">
                                    <div class="product-label">Aksesoris Ponsel</div>
                                    <div class="product-colon">:</div>
                                    <div class="product-value">
                                        Berbagai jenis aksesoris ponsel, seperti sarung ponsel, dan pelindung layar.</br>
                                    </div>
                                </div>

                                <div class="product-row">
                                    <div class="product-label">Ponsel Baru</div>
                                    <div class="product-colon">:</div>
                                    <div class="product-value">
                                        Berbagai merek dan model ponsel baru.</br>
                                    </div>
                                </div>

                                <div class="product-row">
                                    <div class="product-label">Ponsel Bekas</div>
                                    <div class="product-colon">:</div>
                                    <div class="product-value">
                                        Ponsel bekas berkualitas yang telah diuji kelayakannya.</br>
                                    </div>
                                </div>

                                <div class="product-row">
                                    <div class="product-label">Tukar Tambah Ponsel</div>
                                    <div class="product-colon">:</div>
                                    <div class="product-value">
                                        Layanan tukar tambah ponsel untuk mendapatkan ponsel baru</br> dengan harga yang lebih terjangkau.</br>
                                    </div>
                                </div>

                                <div class="product-row">
                                    <div class="product-label">Elektronik Lainnya</div>
                                    <div class="product-colon">:</div>
                                    <div class="product-value">
                                        Produk elektronik lainnya, seperti speaker, mic, flashdisk,  </br>memorycard,  dan perangkat lainnya.</br>
                                    </div>
                                </div>
                            </div>
                    </div>   
                        
                            <!-- Visi dan Misi -->
                            <div class="profile-section">
                                <div class="profile-header">Visi dan Misi</div>
                                <div class="profile-text">
                                    Visi kami adalah menjadi toko handphone dan aksesoris terkemuka di wilayah Alai Parak Kopi dan Lubuk Begalung. Misi kami adalah memberikan pengalaman berbelanja yang memuaskan dengan produk berkualitas tinggi dan layanan pelanggan yang profesional.
                                </div>
                            </div>

                            <!-- Alamat dan Kontak -->
                            <div class="profile-section">
                                <div class="profile-header">Alamat & Kontak</br></div>
                                <div class="profile-text">
                                     <!-- Bagian alamat dan kontak -->

                                        <!-- Baris untuk alamat utama -->
                                        <div class="product-row">
                                            <div class="product-label">Lokasi Utama</div>
                                            <div class="product-colon">:</div>
                                            <div class="product-value">
                                                Jl. Gajah Mada 9-29, Alai Parak Kopi, Kec. Padang Utara, Kota Padang,
                                            </div>
                                        </div>

                                        <!-- Baris untuk alamat cabang -->
                                        <div class="product-row">
                                            <div class="product-label">Lokasi Cabang</div>
                                            <div class="product-colon">:</div>
                                            <div class="product-value">
                                            Jl. Raya Lubuk Begalung 16-35, Lubuk Begalung Nan XX, Kec. Lubuk </br> Begalung, (Disamping kampus UPI YPTK Padang,  Sebelah BSI)
                                            </div>
                                        </div>

                                        <!-- Baris untuk nomor telepon -->
                                        <div class="product-row">
                                            <div class="product-label">Telepon</div>
                                            <div class="product-colon">:</div>
                                            <div class="product-value">
                                                0822-8367-9252
                                            </div>
                                        </div>

                                        <!-- Baris untuk alamat email -->
                                        <div class="product-row">
                                            <div class="product-label">Email</div>
                                            <div class="product-colon">:</div>
                                            <div class="product-value">
                                                minfiiyoniisan@gmail.com
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
</section>