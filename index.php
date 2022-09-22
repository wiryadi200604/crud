<html>
<head>
	<title>Membuat CRUD</title>
</head>
<body>
	<h2>CRUD DATA SISWA TI SMK 1 WONOSOBO</h2>
	
	<p><a href="form_input.php">+ Tambah Data</a></p>
	<table border="1" cellpadding="2">
		<thead>
			<tr>			
				<th>No</th>
				<th>NIS</th>
				<th>Nama</th>
				<th>Jurusan</th>
				<th>No. Telp</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				include "koneksi.php";
				$query	=mysqli_query($conn, "SELECT * FROM tb_siswa ORDER BY id_siswa DESC");
				$no=0;
				while($data	=mysqli_fetch_array($query)){
				$no++
			?>
			<tr>			
				<td><?php echo $no?></td>
				<td><?php echo $data['nis']?></td>
				<td><?php echo $data['nama']?></td>
				<td><?php echo $data['jurusan']?></td>
				<td><?php echo $data['telp']?></td>
				<td><?php echo $data['alamat']?></td>
				<td><a href="form-edit.php?id_siswa=<?=$data['id_siswa']?>">Edit</a> | <a href="hapus.php?id_siswa=<?=$data['id_siswa']?>" onclick="return confirm('Are you sure you want to delete == <?php echo $data['nama']?> == from Database?');">Hapus</a></td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</body>
</html>