<?php 
session_start();
if ($_SESSION["user"]==md5("1234"))
{
    echo "hoşgeldiniz";
}
else
{
     header("location:index.php");
}


?>
<a href="cikis.php">Çıkış İçin Tıklayınız</a>