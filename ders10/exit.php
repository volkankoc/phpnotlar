<?php 
session_start();
date_default_timezone_set('Europe/Istanbul');
include_once('./config/db.php');



$sorgu=$db->prepare("UPDATE sessions set cikis_saati=:cikis_saati WHERE session_id=:session_id");
$sorgu->bindValue(":session_id",$_SESSION['session_id']);
$sorgu->bindValue(":cikis_saati",date("Y-m-d H:i:s"));
$sorgu->execute();

if($sorgu->rowCount()>0)
{
    echo "ÇIKIŞ YAPILDI";
    session_unset();
    session_destroy();
    header("Location:login.php");

}
else{
    echo "OTURUM SONLANDIRILAMADI";
}

?>