<?php 
	session_start();
	//pemeriksaan session
	if (isset($_SESSION['username'])) {
		//jika sudah login
		//menampilkan isi session
		
		} else {
			//session belum ada artinya belum login
			die ("<h2 style= text-align:center>Anda belum login! Anda tidak berhak masuk ke halaman
			ini.<br> Silahkan login <a href='index.php'>di sini</a></h2>");
		}
?>

<html>
<head>
    <title>Data Relawan Covid19</title>
	<link href="css/main.css" rel="stylesheet" type="text/css"/>
</head>
<style>
    table td, table th {
        border: 1px solid black;
        padding: 10px;
    }
</style>
<body style="background-color: #748fa1">
    <div style="width: 90%; background-color: white; margin: 10px auto; padding: 20px;"> 
        <center>
            <td>
                <h1>
                    <?php
                    date_default_timezone_set('Asia/Jakarta');
                    $jam = date("H:i:s");
                    echo "Data Relawan Covid19 wilayah DKI Jakarta<br>";
                    echo "Per " .date('d F Y');
                    echo " ".$jam."<br>";
                    ?>
                </h1>
                
            </td>
            <tr><br></tr>
            <table style="width: 90%; border-collapse:collapse; border: 1px solid #999;">
                <tr>
                <td style="background-color:#b9e2eb; color:black;"><p align=center><font size=4><b>Nama</b></font></p></td>
				<td style="background-color:#b9e2eb; color:black;"><p align=center><font size=4><b>Alamat</b></font></p></td>
                <td style="background-color:#b9e2eb; color:black;"><p align=center><font size=4><b>Provinsi</b></font></p></td>
                <td style="background-color:#b9e2eb; color:black;"><p align=center><font size=4><b>E-mail</b></font></p></td>
                <td style="background-color:#b9e2eb; color:black;"><p align=center><font size=4><b>No HP</b></font></p></td>
				<td style="background-color:#b9e2eb; color:black;"><p align=center><font size=4><b>Keahlian</b></font></p></td>
				<td style="background-color:#b9e2eb; color:black;"><p align=center><font size=4><b>Opsi</b></font></p></td>
                </tr>
                <?php
                include "koneksi.php";
                $con = mysqli_connect("localhost", "root", "", "uasweb2");
                $perintah="SELECT * FROM data";
                $hasil=mysqli_query($con,$perintah);
                while ($data = mysqli_fetch_array($hasil)) {
                ?>
                <tr>
                    <td><p align=center><?php echo $data['nama'];?></p></td>
                    <td><p align=center><?php echo $data['alamat'];?></p></td>
                    <td><p align=center><?php echo $data['provinsi'];?></p></td>
                    <td><p align=center><?php echo $data['email'];?></p></td>
                    <td><p align=center><?php echo $data['nohp'];?></p></td>
                    <td><p align=center><?php echo $data['keahlian'];?></p></td>
                    <td align=center>
					<a href="edit.php?nama=<?php echo $data['nama'];?>"><button style="background-color:#19b524; border-top:0; border-left:0; border-right:0; border-bottom:0; color:white; height: 20px; width:70px; border-radius: 4px; margin-bottom:3px;">Edit</button></a>
					<a href="delete.php?nama=<?php echo $data['nama'];?>"><button style="background-color:#ff3333; border-top:0; border-left:0; border-right:0; border-bottom:0; color:white; height: 20px; width:70px; border-radius: 4px; margin-bottom:3px;">Hapus</button></a> 
                </tr>
            <?php
            }
            ?> 
            </table>
			<br>
		<a href="input_data.php"><button style="background-color:#3e4f73; border-top:0; border-left:0; border-right:0; border-bottom:0; color:white; height: 40px; width:100px; border-radius: 4px; margin-bottom:3px;">Tambah Data</button></a>
		<a href="cetak.php"><button style="background-color:#3e4f73; border-top:0; border-left:0; border-right:0; border-bottom:0; color:white; height: 40px; width:100px; border-radius: 4px; margin-bottom:3px;">Cetak</button></a>
		<a href="logout.php"><button style="background-color:#ff3333; border-top:0; border-left:0; border-right:0; border-bottom:0; color:white; height: 40px; width:100px; border-radius: 4px; margin-bottom:3px;">Logout</button></a>
		</center>
    </div>
</body>
</html>