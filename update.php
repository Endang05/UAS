<?php
include 'koneksi.php';

$con 		= mysqli_connect("localhost", "root", "", "uasweb2");
$nama 		= mysqli_real_escape_string($con, $_POST['nama']);
$alamat 	= mysqli_real_escape_string($con, $_POST['alamat']);
$provinsi	= mysqli_real_escape_string($con, $_POST['provinsi']);
$email 		= mysqli_real_escape_string($con, $_POST['email']);
$nohp		= mysqli_real_escape_string($con, $_POST['nohp']);
$keahlian 	= mysqli_real_escape_string($con, $_POST['keahlian']);

$update = "UPDATE data SET alamat='$alamat', provinsi='$provinsi', email='$email', nohp='$nohp', keahlian='$keahlian' WHERE nama='$nama'"; 
$hasil=mysqli_query($con,$update); 
if ($hasil)
{ 
 	echo "<SCRIPT>alert('Data Berhasil Di Update...');window.location='tampil.php'</SCRIPT>";
}
else 
{ 
 	echo "<SCRIPT>alert('Gagal Merubah Data...');window.location='edit.php'</SCRIPT>";
} 
?>