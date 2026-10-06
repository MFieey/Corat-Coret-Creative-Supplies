<footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-top-area">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="aa-footer-widget">
                                    <h3>Menu</h3>
                                    <ul class="aa-footer-nav">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="index.php?page=registrasi">Cara Belanja</a></li>
                                        <li><a href="index.php?page=registrasi">Registrasi</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Kategori</h3>
                                        <ul class="aa-footer-nav">
                                            <?php
                                            $ambil = $koneksi->query('SELECT * FROM tb_kategori');
                                            while ($pecah = $ambil->fetch_assoc()) {
                                            ?>
                                                <li><a href="index.php?page=kategori&kategori_id=<?php echo $pecah['kategori_id'] ?>"><?php echo $pecah['kategori_nama'] ?></a></li>
                                            <?php } ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Hubungi Kami</h3>
                                        <address>
                                            <p>Jl. Raya Lubuk Begalung 16-35, Lubuk Begalung Nan XX, Kec. Lubuk Begalung, Kota Padang, Sumatera Barat</p>
                                            <p><span class="fa fa-phone"></span>0822-8367-9252</p>
                                            <p><span class="fa fa-envelope"></span>minfiiyoniisan@gmail.com</p>
                                        </address>
                                        <div class="aa-footer-social">
                                            <!-- salin link facebook owner -->


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
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-bottom-area">
                        <p>Copyright <?= date("Y") ?> Coret Coret Creative Supplies | Designed by <a href="">Fikri Gusti Arian</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>