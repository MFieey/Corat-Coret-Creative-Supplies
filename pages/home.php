<?php

// ambil data produk berdasarkan kategori yang dipilih
$daftar_produk    = $koneksi->query("SELECT * FROM tb_produk");
?>

<section id="aa-slider">
    <div class="aa-slider-area">
        <div id="sequence" class="seq">
            <div class="seq-screen">
                <ul class="seq-canvas">
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="assets/img/baner1.jpg" alt="Men slide img" />
                        </div>
                        <div class="seq-title">
                            <h2 data-seq>Coret Coret Creative Supplies</h2>
                            <p data-seq>Menyediakan berbagai alat tulis</p>

                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="assets/img/baner2.jpg" alt="Wristwatch slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Rekomendasi</span>
                            <h2 data-seq>Rekomendasi Alat Tulis??</h2>
                            <p data-seq>Disini Aja Kak</p>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">BELANJA SEKARANG</a>
                        </div>
                    </li>
                    <!-- single slide item -->
                    <li>
                        <div class="seq-model">
                            <img data-seq src="assets/img/baner3.jpg" alt="Women Jeans slide img" />
                        </div>
                        <div class="seq-title">
                            <span data-seq>Atau Mau</span>
                            <h2 data-seq>Nyari Harga Murah??</h2>
                            <p data-seq>Udah dibilang DISINI AJA</p>
                            <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">BELANJA SEKARANG</a>
                        </div>
                    </li>
                    <!-- single slide item -->
                </ul>
            </div>
            <!-- slider navigation btn -->
            <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
            </fieldset>
        </div>
    </div>
</section>

<section id="aa-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="aa-product-area">
                        <div class="aa-product-inner">
                            <!-- start prduct navigation -->
                            <ul class="nav nav-tabs aa-products-tab">
                                <li class="active"><a href="#men" data-toggle="tab">Model Produk</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Start men product category -->
                                <div class="tab-pane fade in active" id="men">
                                    <ul class="aa-product-catg">

                                        <?php
                                        while ($produk = $daftar_produk->fetch_assoc()) {
                                        ?>
                                            <!-- start single product item -->
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="index.php?page=beli&id=<?php echo $produk['produk_id'] ?>"><img src="admin/images/produk/<?php echo $produk['produk_foto'] ?>" alt="polo shirt img" /></a>
                                                    <a class="aa-add-card-btn" href="index.php?page=beli&id=<?php echo $produk['produk_id'] ?>"><span class="fa fa-shopping-cart"></span>Tambah Ke Keranjang</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="index.php?page=beli&id=<?php echo $produk['produk_id'] ?>"><?php echo $produk['produk_nama']; ?></a></h4>
                                                        <span class="aa-product-price"><?php echo rupiah($produk['produk_harga']); ?></span>
                                                        <span class="caption"]><?php echo ($produk['produk_deskripsi']); ?></span>
                                                        <?php
                                                        if ($produk['produk_diskon'] != 0) {
                                                            $diskon = $produk['produk_harga'] - ($produk['produk_harga'] * $produk['produk_diskon'] / 100);
                                                        ?>
                                                            <span class="aa-product-price"><del><?= rupiah($diskon) ?></del></span>
                                                        <?php
                                                        }
                                                        ?>
                                                    </figcaption>
                                                </figure>

                                                <!-- product badge -->
                                                <span class="aa-badge aa-sale" href="index.php?page=beli&id=<?php echo $produk['produk_id'] ?>">SALE!</span>
                                            </li>
                                            <!-- start single product item -->
                                        <?php
                                        }
                                        ?>
                                    </ul>

                                </div>
                                <!-- / electronic product category -->
                            </div>
                            <!-- quick view modal -->
                            <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <div class="row">
                                                <!-- Modal view slider -->
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="aa-product-view-slider">
                                                        <div class="simpleLens-gallery-container" id="demo-1">
                                                            <div class="simpleLens-container">
                                                                <div class="simpleLens-big-image-container">
                                                                    <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                                                        <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="simpleLens-thumbnails-container">
                                                                <a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="img/view-slider/large/polo-shirt-1.png" data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                                                    <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                                                </a>
                                                                <a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="img/view-slider/large/polo-shirt-3.png" data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                                                    <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                                                </a>

                                                                <a href="#" class="simpleLens-thumbnail-wrapper" data-lens-image="img/view-slider/large/polo-shirt-4.png" data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                                                    <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal view content -->
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="aa-product-view-content">
                                                        <h3>T-Shirt</h3>
                                                        <div class="aa-price-block">
                                                            <span class="aa-product-view-price">$34.99</span>
                                                            <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis
                                                            quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                                        <h4>Size</h4>
                                                        <div class="aa-prod-view-size">
                                                            <a href="#">S</a>
                                                            <a href="#">M</a>
                                                            <a href="#">L</a>
                                                            <a href="#">XL</a>
                                                        </div>
                                                        <div class="aa-prod-quantity">
                                                            <form action="">
                                                                <select name="" id="">
                                                                    <option value="0" selected="1">1</option>
                                                                    <option value="1">2</option>
                                                                    <option value="2">3</option>
                                                                    <option value="3">4</option>
                                                                    <option value="4">5</option>
                                                                    <option value="5">6</option>
                                                                </select>
                                                            </form>
                                                            <p class="aa-prod-category">
                                                                Category: <a href="#">Polo T-Shirt</a>
                                                            </p>
                                                        </div>
                                                        <div class="aa-prod-view-bottom">
                                                            <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To
                                                                Cart</a>
                                                            <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- / quick view modal -->
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