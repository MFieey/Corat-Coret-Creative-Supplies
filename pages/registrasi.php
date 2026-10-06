<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $pelanggan_user      =  $_POST['pelanggan_user'];
    $pelanggan_pass      =  $_POST['pelanggan_pass'];
    $pelanggan_nama      =  $_POST['pelanggan_nama'];
    $pelanggan_nik      =  $_POST['pelanggan_nik'];
    $pelanggan_jk       =  $_POST['pelanggan_jk'];
    $pelanggan_tgl_lahir =  $_POST['pelanggan_tgl_lahir'];
    $pelanggan_pekerjaan =  $_POST['pelanggan_pekerjaan'];
    $pelanggan_alamat    =  $_POST['pelanggan_alamat'];
    $pelanggan_nohp      =  $_POST['pelanggan_nohp'];

    $koneksi->query("INSERT INTO tb_pelanggan (pelanggan_user,pelanggan_pass,pelanggan_nama,pelanggan_nik,pelanggan_jk,pelanggan_tgl_lahir,pelanggan_pekerjaan,pelanggan_alamat,pelanggan_nohp) VALUES ('$pelanggan_user','$pelanggan_pass','$pelanggan_nama','$pelanggan_nik','$pelanggan_jk','$pelanggan_tgl_lahir','$pelanggan_pekerjaan','$pelanggan_alamat','$pelanggan_nohp') ");
    echo  "<script>
                alert('Registrasi Berhasil. Anda sudah bisa login sekarang');
                window.location='?page=login'
        </script>";
} ?>
<section id="aa-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-contact-area">



                    <!-- Contact address -->
                    <div class="aa-contact-address">
                        <h1 class="text-center"> Registrasi </h1>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="aa-contact-address-left">

                                    <form class="comments-form contact-form" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Username" name="pelanggan_user" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="password" placeholder="Password" name="pelanggan_pass" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Nama Lengkap" name="pelanggan_nama" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="NIK KTP" name="pelanggan_nik" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Jenis Kelamin" name="pelanggan_jk" class="form-control">
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="date" placeholder="Tanggal Lahir" name="pelanggan_tgl_lahir" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="Pekerjaan" name="pelanggan_pekerjaan" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" placeholder="No Hp" name="pelanggan_nohp" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <textarea class="form-control" rows="3" placeholder="Alamat" name="pelanggan_alamat" style="width:100%;;"></textarea>
                                            </div>
                                        </div>



                                        <button class="aa-browse-btn">Registrasi</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="aa-contact-address-right">
                                    <address>
                                        <h4>Corat Coret Creative Supplies</h4>
                                        <p>Silahkan Input Data Diri Anda</p>
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