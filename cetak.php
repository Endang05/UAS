<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Relawan Covid19</title>
</head>
<body>
  <div>
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
      <table rules="all" style="width: 85%; border: 1px solid black; ">
      <tr>
				<td style="background-color:#b9e2eb; color:black;"><p align=center><font size=3><b>Nama</b></font></p></td>
				<td style="background-color:#b9e2eb; color:black;"><p align=center><font size=3><b>Alamat</b></font></p></td>
                <td style="background-color:#b9e2eb; color:black;"><p align=center><font size=3><b>Provinsi</b></font></p></td>
                <td style="background-color:#b9e2eb; color:black;"><p align=center><font size=3><b>E-mail</b></font></p></td>
                <td style="background-color:#b9e2eb; color:black;"><p align=center><font size=3><b>No HP</b></font></p></td>
				<td style="background-color:#b9e2eb; color:black;"><p align=center><font size=3><b>Keahlian</b></font></p></td>
      </tr>

      <tbody>
       <?php
          include "koneksi.php";
          $con = mysqli_connect("localhost", "root", "", "uasweb2");
          $perintah="SELECT * FROM data ORDER BY nama ASC";
          $hasil=mysqli_query($con,$perintah);
          while ($data = mysqli_fetch_array($hasil)) {
          ?>
          <tr cellpadding="10">
            <td align="center"><?php echo $data['nama'];?></td>
            <td align="center"><?php echo $data['alamat'];?></td>
            <td align="center"><?php echo $data['provinsi'];?></td>
            <td align="center"><?php echo $data['email'];?></td>
            <td align="center"><?php echo $data['nohp'];?></td>
            <td align="center"><?php echo $data['keahlian'];?></td>  
          </tr>
            </tbody>
            <?php
            }
            ?>
            </table>

        </center>
      <script>
        window.print();
      </script>
  </body>
</html>