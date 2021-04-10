<?php
include 'koneksi.php';
$nama = $_GET['nama'];
$con = mysqli_connect("localhost", "root", "", "uasweb2");
$perintah="SELECT * FROM data WHERE nama ='$nama'";
$hasil=mysqli_query($con,$perintah);
$data=mysqli_fetch_array($hasil);
?>
<input type="hidden" name="ID" value="<?php echo "$data[nama]" ?>">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Data Relawan Covid19</title>
</head>
<body style="background-color: #748fa1">
    <div style="width: 50%; background-color: white; margin: 10px auto; padding: 20px;">
	<center>
        <h1 style="text-align: center">INPUT DATA RELAWAN COVID-19</h1>
        <hr>
        <form action="update.php" method="POST">
            <h4 style="display: block; margin-bottom: 5px;">Nama Lengkap :</h4>
            <input type="nama" name="nama" value="<?php echo "$data[nama]" ?>" style="width: 90%; height: 30px;" required>
			
			<h4 style="display: block; margin-bottom: 5px;">Alamat :</h4>
            <input type="alamat" name="alamat" value="<?php echo "$data[alamat]" ?>" style="width: 90%; height: 30px;" required>

            <h4 style="display: block; margin-bottom: 5px;">Provinsi :</h4>
            <select value="<?php echo "$data[provinsi]" ?>" name="provinsi" style="width: 91%; height: 35px;">
                <option value="<?php echo "$data[provinsi]"?>" selected>=============================== Pilih Provinsi ===============================</option>
                <option value="<?php echo "$data[provinsi]" ?>">Aceh</option>
                <option value="<?php echo "$data[provinsi]" ?>">Sumatera Utara</option>
                <option value="<?php echo "$data[provinsi]" ?>">Sumatera Barat</option>
				<option value="<?php echo "$data[provinsi]" ?>">Sumatera Selatan</option>
				<option value="<?php echo "$data[provinsi]" ?>">Riau</option>
				<option value="<?php echo "$data[provinsi]" ?>">Kepulauan Riau</option>
				<option value="<?php echo "$data[provinsi]" ?>">Jambi</option>
				<option value="<?php echo "$data[provinsi]" ?>">Bangka Belitung</option>
				<option value="<?php echo "$data[provinsi]" ?>">Bengkulu</option>
				<option value="<?php echo "$data[provinsi]" ?>">Lampung</option>
				<option value="<?php echo "$data[provinsi]" ?>">DKI Jakarta</option>
				<option value="<?php echo "$data[provinsi]" ?>">Banten</option>
				<option value="<?php echo "$data[provinsi]" ?>">Jawa Barat</option>
				<option value="<?php echo "$data[provinsi]" ?>">Jawa Tengah</option>
				<option value="<?php echo "$data[provinsi]" ?>">Jawa Timur</option>
				<option value="<?php echo "$data[provinsi]" ?>">DI Yogyakarta</option>
				<option value="<?php echo "$data[provinsi]" ?>">Bali</option>
				<option value="<?php echo "$data[provinsi]" ?>">Nusa Tenggara Barat</option>
				<option value="<?php echo "$data[provinsi]" ?>">Nusa Tenggara Timur</option>
				<option value="<?php echo "$data[provinsi]" ?>">Kalimantan Barat</option>
				<option value="<?php echo "$data[provinsi]" ?>">Kalimantan Selatan</option>
				<option value="<?php echo "$data[provinsi]" ?>">Kalimantan Tengah</option>
				<option value="<?php echo "$data[provinsi]" ?>">Kalimantan Utara</option>
				<option value="<?php echo "$data[provinsi]" ?>">Sulawesi Selatan</option>
				<option value="<?php echo "$data[provinsi]" ?>">Sulawesi Utara</option>
				<option value="<?php echo "$data[provinsi]" ?>">Sulawesi Barat</option>
				<option value="<?php echo "$data[provinsi]" ?>">Sulawesi Tenggara</option>
				<option value="<?php echo "$data[provinsi]" ?>">Gorontalo</option>
				<option value="<?php echo "$data[provinsi]" ?>">Maluku Utara</option>
				<option value="<?php echo "$data[provinsi]" ?>">Maluku</option>
				<option value="<?php echo "$data[provinsi]" ?>">Papua</option>
				<option value="<?php echo "$data[provinsi]" ?>">Papua Barat</option>
            </select>

            <h4 style="display: block; margin-bottom: 5px;">Email</h4>
            <input type="text" value="<?php echo "$data[email]" ?>" name="email" style="width: 90%; height: 30px;">

            <h4 style="display: block; margin-bottom: 5px;">Nomor HP</h4>
            <input type="text" value="<?php echo "$data[nohp]" ?>" name="nohp" style="width: 90%; height: 30px;">

            <h4 style="display: block; margin-bottom: 5px;">Keahlian</h4>
            <input type="text" value="<?php echo "$data[keahlian]" ?>" name="keahlian" style="width: 90%; height: 30px;">
			<br/>
            <div>
                <form name=article method=post action=update.php>
				<button type="submit" name="submit" style="margin-top:15; background-color:#3e4f73; border-top:0; border-left:0; border-right:0; border-bottom:0; color:white; height: 40px; width:100px; border-radius: 4px; margin-bottom:3px;">Submit</button></form>
				<a href="tampil.php"><button style="background-color:#ff3333; border-top:0; border-left:0; border-right:0; border-bottom:0; color:white; height: 40px; width:100px; border-radius: 4px; margin-bottom:3px;">Cancel</button></a>                
            </div>
        </form>
    </div>
</body>
</html>