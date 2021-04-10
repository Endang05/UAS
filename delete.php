<?php
include 'koneksi.php';
$nama = $_GET['nama'];
$con = mysqli_connect("localhost", "root", "", "uasweb2");
$perintah="DELETE FROM data WHERE nama ='$nama'";
$hasil=mysqli_query($con,$perintah);
if($hasil){
    echo "<SCRIPT>alert('Data Telah Terhapus');window.location='tampil.php'</SCRIPT>";
}
else{
    echo "<SCRIPT>alert('Gagal Terhapus');window.location='tampil.php'</SCRIPT>";
}
?>