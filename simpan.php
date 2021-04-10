<?php
$con 		= mysqli_connect("localhost", "root", "", "uasweb2");
$nama 		= mysqli_real_escape_string($con, $_POST['nama']);
$alamat 	= mysqli_real_escape_string($con, $_POST['alamat']);
$provinsi	= mysqli_real_escape_string($con, $_POST['provinsi']);
$email 		= mysqli_real_escape_string($con, $_POST['email']);
$nohp		= mysqli_real_escape_string($con, $_POST['nohp']);
$keahlian 	= mysqli_real_escape_string($con, $_POST['keahlian']);

$query = "insert into data (nama,alamat,provinsi,email,nohp,keahlian)
    values('$nama','$alamat','$provinsi','$email','$nohp','$keahlian')";
$result = mysqli_query($con, $query);
if($result){
    echo "<SCRIPT>alert('Data Telah Tersimpan');window.location='tampil.php'</SCRIPT>";
}
else{
    echo "<SCRIPT>alert('Gagal menyimpan');window.location='input_data.php'</SCRIPT>";
}
?>