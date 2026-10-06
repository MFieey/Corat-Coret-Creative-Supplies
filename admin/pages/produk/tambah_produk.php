<div class="container-fluid">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="?page=home">Home</a>
		</li>
		<li class="breadcrumb-item">
			Admin
		</li>
		<li class="breadcrumb-item">
			Produk
		</li>
	</ol>
	<div class="card">
		<div class="card-header bg-primary">
			<h2>Tambah Data Produk</h2>
		</div>
		<div class="card-body">
			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Kategori</label>
					<select name="kategori" class="form-control">
						<?php
						$ambilKategori = $koneksi->query("SELECT * FROM tb_kategori");
						while ($pecahKategori = $ambilKategori->fetch_assoc()) {
						?>
							<option value="<?php echo $pecahKategori['kategori_id'] ?>"><?php echo $pecahKategori['kategori_nama'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label>Produk Nama</label>
					<input type="text" name="produknama" class="form-control">
				</div>

				<div class="form-group">
					<label>Produk Harga</label>
					<input type="number" name="produkharga" class="form-control">
				</div>
				<div class="form-group">
					<label>Produk Stok</label>
					<input type="number" name="produkstok" class="form-control">
				</div>
				<div class="form-group">
					<label>Produk deskripsi</label>
					<input type="text" name="produkdeskripsi" class="form-control">
				</div>
				<div class="form-group">
					<label>Produk Foto</label>
					<input type="file" name="produkfoto" class="form-control">
				</div>

				<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
			</form>
			<?php
			if (isset($_POST['simpan'])) {
				$nama_foto         =  $_FILES['produkfoto']['name'];
				$lokasi         	 =  $_FILES['produkfoto']['tmp_name'];
				// var_dump($produk_nama);
				// var_dump($lokasi);
				// exit;
				$produk_harga        =  $_POST['produkharga'];
				$kategori_id         =  $_POST['kategori'];
				$produk_stok         =  $_POST['produkstok'];
				$produk_deskripsi       =  $_POST['produkdeskripsi'];
				$produk_nama         =  $_POST['produknama'];

				move_uploaded_file($lokasi, 'images/produk/' . $nama_foto);

				$koneksi->query("INSERT INTO `tb_produk` (	`kategori_id`, 
															`produk_nama`, 
															`produk_harga`, 
															`produk_stok`, 
															`produk_deskripsi`, 
															`produk_foto`) 
															VALUES 
															('$kategori_id',
															'$produk_nama',
															'$produk_harga',
															'$produk_stok',
															'$produk_deskripsi',
															'$nama_foto'
															)");
				echo  "<script>
					   			alert('Data Berhasil Disimpan');
					   			window.location='?page=pages/produk/index'
					   </script>";
			} ?>


		</div>
	</div>
</div>





</div>