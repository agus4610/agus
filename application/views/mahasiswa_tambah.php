<!DOCTYPE html>
<html>
<head>
	<title>Tambah mahasiswa</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>  

	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: black">
		<a href="" class="navbar-brand">
			tugas bro
		</a>
		<div class="navbar-nav">
			<a href="<?= site_url('DController')?>" class="nav-link ">Beranda</a>
			<a href="<?= site_url('DController/tambah')?>" class="nav-link active">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">agus</a>
			
		</div>
	</nav>

	
	<br><br>
	<div class="container">
		
			
		
				<form action="<?= site_url('DController/simpan_data')?>" method="post">

					<div class="form-group row">
						<label for="inputnama" class="col-sm-2 col-form-label">jurusan</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="kolom_jurusan" name="kolom_jurusan" placeholder="Masukan jurusan">
						</div>
					</div>

					<div class="form-group row">
						<label for="inputnama" class="col-sm-2 col-form-label">kelas</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="kolom_kelas" name="kolom_kelas" placeholder="Masukan kelas">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputnama" class="col-sm-2 col-form-label">isi</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="kolom_isi" name="kolom_isi" placeholder="Masukan isi">
						</div>
					</div>
					<div align="right">
						<button type="submit" name="submit" class="btn btn-dark">Simpan</button>
					</div>
				</form>
	

	</div>

</body>
</html>