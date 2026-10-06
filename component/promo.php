<section id="aa-promo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-promo-area">
                    <div class="row">
                        <!-- promo left -->
                        <div class="col-md-5 no-padding">
                            <?php
                            $dataPromo = $koneksi->query("SELECT * FROM tb_produk")->fetch_assoc();
                            ?>
                            <div class="aa-promo-left">
                                <div class="aa-promo-banner">
                                    <img src="assets/img/produk/<?php echo $dataPromo['produk_foto'] ?>" alt="img">
                                    <div class="aa-prom-content">
                                        <span><?php echo $dataPromo['produk_diskon'] ?></span>
                                        <h4><a href="#"><?php echo $dataPromo['produk_nama'] ?></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- promo right -->
                        <div class="col-md-7 no-padding">
                            <div class="aa-promo-right">
                                <?php
                                $ambilPromo2 = $koneksi->query("SELECT * FROM tb_produk WHERE produk_id != '$dataPromo[produk_id]'");
                                while ($pecahPromo2 = $ambilPromo2->fetch_assoc()) {
                                ?>
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="assets/img/produk/<?php echo $pecahPromo2['produk_foto'] ?>" alt="img">
                                            <div class="aa-prom-content">
                                                <span>Exclusive Item</span>
                                                <h4><a href="#"><?php echo $pecahPromo2['produk_nama'] ?></a></h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>