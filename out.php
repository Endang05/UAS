<html>
    <head>
        <title>Data Relawan Covid19</title>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="badan">
                <div class="kepala">
                    <p class="kepalatext">Data Relawan Covid19</p>
                </div>
                  <div class="bingkai">
                   <div style="padding-top:10px; padding-left:10px; padding-right:10px; color:#030033;">
                         <?php
                          session_start();
                          if(empty($_SESSION['username'])){
                              echo "<br/><br/><br/><br/><center><h1>ANDA SUDAH LOGOUT!</h1></center>
                                      <h2><a href='index.php'><center>Login</center></a></h2>";
                          }else{
                              echo "<br/><br/><center><h2>LOGIN BERHASIL</h2><h3>Klik untuk melanjutkan!</h3><br/>
							  <a href='tampil.php'><center><font size='12px' color='blue'> >>> </font></b></center></a>";
                          }
                          ?>
                   </div>
                  </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>	