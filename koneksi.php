<?php				            // tag pembuka syntax PHP
// deklarasi parameter koneksi database
$hostserver   = "localhost";		// server database, default “localhost” atau “127.0.0.1”
$username = "root";		        // username database, default “root”
$password = "";			        // password database, default kosong
$database = "db_crud";		// memilih database yang akan digunakan
 
// koneksi database
$conn = mysqli_connect($hostserver, $username, $password, $database);

// cek koneksi
if (mysqli_connect_error()){
	echo "Oops! Koneksi database gagal : --> " . mysqli_connect_error();
}
?>					            <!-- tag penutup syntax PHP -->
