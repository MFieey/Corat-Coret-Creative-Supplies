<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['pelanggan_user'];
    $password = $_POST['pelanggan_pass'];
    $data_user = $koneksi->query("SELECT * FROM tb_pelanggan WHERE pelanggan_user = '" . $username . "' and pelanggan_pass = '" . $password . "'")->fetch_assoc();

    if (!empty($data_user)) {
        $_SESSION['member'] = $data_user;
        echo "
            <script>
                alert('Anda berhasil login!');
                window.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Username atau password salah!');
            </script>
        ";
    }
}
?>
<section id="aa-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-contact-area">

                    <!-- Contact address -->
                    <div class="aa-contact-address">
                        <h1 class="text-center"> Login </h1>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="aa-contact-address-left">

                                    <form class="comments-form contact-form" method="post">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Username" name="pelanggan_user" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="password" placeholder="Password" name="pelanggan_pass" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button name="login" type="submit" class="aa-browse-btn">Login</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="aa-contact-address-right">
                                    <address>
                                        <h4>Corat Coret Creative Supplies</h4>
                                        <p>Silahkan Login Terlebih Dahulu</p>
                                        <p><span class="fa fa-home"></span>Jl. Raya Lubuk Begalung 16-35, Lubuk Begalung Nan XX, Kec. Lubuk Begalung, Kota Padang, Sumatera Barat</p>
                                        <p><span class="fa fa-phone"></span>0822-8367-9252</p>

                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>