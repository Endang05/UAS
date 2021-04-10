<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Data Relawan Covid19</title>
</head>
<body >
<body style="background-color: #748fa1">
    <div style="width: 50%; background-color: white; margin: 10px auto; padding: 20px;"> 
        <h1 style="text-align: center">INPUT DATA RELAWAN COVID-19</h1>
        <form action="simpan.php" method="POST">
		<center>
            <h4 style="display: block; margin-bottom: 5px;">Nama Lengkap :</h4>
			<input type="text" name="nama" style="width: 90%; height: 20px;" id="nama" required>
			
			<h4 style="display: block; margin-bottom: 5px;">Alamat Rumah :</h4>
			<input type="text" name="alamat" style="width: 90%; height: 20px;" id="alamat" required>
			
            <h4 style="display: block; margin-bottom: 5px;">Provinsi :</h4>
            <select name="provinsi" style="width: 91%; height: 30px;" id="provinsi" required>
            <option value="provinsi">=============================== Pilih Provinsi ===============================</option>
			<option value="Aceh">Aceh</option>
			<option value="Sumatera Utara">Sumatera Utara</option>
			<option value="Sumatera Barat">Sumatera Barat</option>
			<option value="Sumatera Selatan">Sumatera Selatan</option>
			<option value="Riau">Riau</option>
			<option value="Kepulauan Riau">Kepulauan Riau</option>
			<option value="Jambi">Jambi</option>
			<option value="Bangka Belitung">Bangka Belitung</option>
			<option value="Bengkulu">Bengkulu</option>
			<option value="Lampung">Lampung</option>
			<option value="DKI Jakarta">DKI Jakarta</option>
			<option value="Banten">Banten</option>
			<option value="Jawa Barat">Jawa Barat</option>
			<option value="Jawa Tengah">Jawa Tengah</option>
			<option value="Jawa Timur">Jawa Timur</option>
			<option value="DI Yogyakarta">DI Yogyakarta</option>
			<option value="Bali">Bali</option>
			<option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
			<option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
			<option value="Kalimantan Barat">Kalimantan Barat</option>
			<option value="Kalimantan Timur">Kalimantan Timur</option>
			<option value="Kalimantan Selatan">Kalimantan Selatan</option>
			<option value="Kalimantan Tengah">Kalimantan Tengah</option>
			<option value="Kalimantan Utara">Kalimantan Utara</option>
			<option value="Sulawesi Selatan">Sulawesi Selatan</option>
			<option value="Sulawesi Utara">Sulawesi Utara</option>
			<option value="Sulawesi Barat">Sulawesi Barat</option>
			<option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
			<option value="Gorontalo">Gorontalo</option>
			<option value="Maluku Utara">Maluku Utara</option>
			<option value="Maluku">Maluku</option>
			<option value="Papua">Papua</option>
			<option value="Papua Barat">Papua Barat</option>
			</select>
			
            <h4 style="display: block; margin-bottom: 5px;">Email :</h4>
            <input type="text" name="email" style="width: 90%; height: 20px;" id="email" required>
			
			<h4 style="display: block; margin-bottom: 5px;">No HP :</h4>
            <input type="text" name="nohp" style="width: 90%; height: 20px;" id="nohp" required>
			
			<h4 style="display: block; margin-bottom: 5px;">Keahlian :</h4>
            <input type="text" name="keahlian" style="width: 90%; height: 20px;" id="keahlian" required>

            <div>
                <button type="submit" name="simpan" style="margin-top: 10px; background-color:#3e4f73; border-top:0; border-left:0; border-right:0; border-bottom:0; color:white; height: 40px; width:100px; border-radius: 4px; margin-bottom:3px;">Simpan</button> 
            </div>
		</center>
        </form>
	</div>
</body>
</html>