
<?php 

session_start();
if ($_SESSION['adsoyad'])
{
    echo "Hoşgeldiniz.... ".$_SESSION['adsoyad'];
    echo '<a href="exit.php">Oturumu Kapat</a>';
}
?>
