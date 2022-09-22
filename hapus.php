<?php
	include "koneksi.php";
	if (isset($_GET['id_siswa'])) {
		$id_siswa	=$_GET['id_siswa'];
	}
	else{
		echo "Oops! No ID Selected";
	}
	
	if (!empty($id_siswa) && $id_siswa != "") {
		$hapus =mysqli_query($conn, "DELETE FROM tb_siswa WHERE id_siswa='$id_siswa'");
			?>
				<script language="JavaScript">
				alert('Good! Delete data siswa berhasil ...');
				document.location='./';
				</script>
			<?php		
	}
?>