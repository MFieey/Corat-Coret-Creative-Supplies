<header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-top-area">
                        <!-- start header top left -->
                        <div class="aa-header-top-left">
                            <!-- start language -->

                            <!-- / currency -->
                            <!-- start cellphone -->
                            <div class="cellphone hidden-xs">
                                <p><span class="fa fa-phone"></span>0822-8367-9252</p>
                            </div>
                            <!-- / cellphone -->
                        </div>
                        <!-- / header top left -->
                        <div class="aa-header-top-right">
                            <ul class="aa-head-top-nav-right">
                                <?php
                                // jika user sudah login maka menu logout ditampilkan
                                if (!empty($_SESSION['member'])) {
                                ?>
                                    <li class="hidden-xs"><a href="index.php?page=transaksi&id=<?php echo $_SESSION['member']['pelanggan_id'] ?>">Transaksi</a></li>
                                    <li class="hidden-xs"><a href="index.php?page=keranjang">Keranjang</a></li>
                                    <li class="hidden-xs"><a href="logout.php">Logout</a></li> 
                                    <li class="hidden-xs"><a href="admin/index.php">Halaman Admin</a></li>
                                <?php
                                } else {
                                ?>
                                    <li class="hidden-xs"><a href="index.php?page=registrasi">Registrasi</a></li>
                                    <li class="hidden-xs"><a href="index.php?page=login">Login</a></li>
                                <?php
                                }
                                ?>

                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-bottom-area">
                        <!-- logo  -->
                        <div class="aa-logo">
                            <!-- Text based logo -->
                            <img src="assets/img/logoccs.jpg" width="270" height="200" alt="" class="">

                            <!-- img based logo -->
                            <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                        </div>
                        <!-- / logo  -->
                        <!-- cart box -->

                        <!-- / cart box -->
                        <!-- search box -->
                        <div class="aa-search-box">
                            <form action="" method="GET">
                                <input type="hidden" name='page' value='pencarian' />
                                <input type="text" name="kata_kunci" placeholder="Masukkan Kata Kunci">
                                <button type="submit"><span class="fa fa-search"></span></button>
                            </form>
                        </div>
                        <!-- / search box --
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header bottom  -->
</header>