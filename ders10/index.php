<?php 
session_start();
session_regenerate_id();

$pass=md5($_POST['pass']);
$user=$_POST['user'];
include_once("./config/db.php");
$sorgu=$db->prepare("SELECT * FROM users WHERE username=:username");
$sorgu->bindValue(":username",$user);
$sorgu->execute();

if($sorgu->rowCount()>0){
    $row=$sorgu->fetch(PDO::FETCH_ASSOC);
    if ($row["pass"]==$pass)
    {
        session_start();
        $_SESSION['adsoyad']=$row["adsoyad"];
        $_SESSION['id']=$row["id"];
        $_SESSION['session_id']=session_id();
        $sorgu=$db->prepare("INSERT INTO sessions set session_id=:session_id,user=:user,cikis_saati=:cikis_saati");
        $sorgu->bindValue(":user",$row['username']);
        $sorgu->bindValue(":cikis_saati","");
        $sorgu->bindValue(":session_id",session_id());
        $sorgu->execute();
        header("location:giris.php");

    }
    else{
        echo "şifre yanlış";
    }
}
else{
    echo "Kayıt Bulunamadı";
}


?>