<?php 
include_once("connection.php");
$id= $_POST['id'];
$ad= $_POST['ad'];
$soyad= $_POST['soyad'];
$numara= $_POST['numara'];


$sorgu=$conn->prepare("UPDATE bilgi SET ad=:ad,soyad=:soyad,numara=:numara WHERE id=:id");

$sorgu->bindValue(":ad",$ad);
$sorgu->bindValue(":soyad",$soyad);
$sorgu->bindValue(":numara",$numara);
$sorgu->bindValue(":id",$id);
$sonuc=$sorgu->execute();
if($sonuc)
    {
        echo "Bir kayıt düzenlendi";
        //header("Refresh:2; url=index.php");
    }
else {
        echo "Hata oluştu";
        //header("Refresh:2; url=ekle.php");
}
?>