<section id="menu">
    <div class="container">
        <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Left nav -->
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <?php
                        $ambil = $koneksi->query('SELECT * FROM tb_kategori');
                        while ($pecah = $ambil->fetch_assoc()) {
                        ?>
                            <li><a href="index.php?page=kategori&kategori_id=<?php echo $pecah['kategori_id'] ?>"><?php echo $pecah['kategori_nama'] ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
</section>