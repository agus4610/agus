<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: black">
		<a href="" class="navbar-brand">
			tugas bro
		</a>
		<div class="navbar-nav">
			<a href="<?= site_url('DController')?>" class="nav-link active">Beranda</a>
			<a href="<?= site_url('DController/tambah')?>" class="nav-link">Tambah Data</a>
		</div>
		<div class="navbar-nav ml-auto">
			<a href="" class="nav-link active">Abang Agus</a>
			
		</div>
	</nav>
	<br>

<div class="container">
	

	<table class="table table-dark table-striped">
		
		<tr class="text-center">
			<th>Id</th>
			<th>Jurusan</th>
			<th>Kelas</th>
			<th>Isi</th>
			
		</tr>
		<?php foreach ($data_table as $key ): ?>
		<tr>
			
			<td><?= $key->id_25 ?></td>
			<td><?= $key->kolom_jurusan ?></td>
			<td><?= $key->kolom_kelas ?></td>
			<td><?= $key->kolom_isi ?></td>
			

			</td>
		</tr>
	<?php endforeach ?>

	</table>
</div>
</body>
</html>