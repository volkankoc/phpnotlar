<?php 
require ("BasicDB.php");
$db=new basicdb("localhost","oop","root","root");

$sorgu = $db->from('users')->all();
   

//Tüm kayıtlar
if ( $sorgu ){
  foreach ( $sorgu as $satir){
    echo $satir["id"]."-".$satir["ad"]. " " . $satir["soyad"]."<br>";
  }
}

//istenilen bir kayıt
echo "<hr>";
$sorgu=$db->from('users')->where('id',5,'>')->all();
if ( $sorgu ){
    foreach ( $sorgu as $satir){
      echo $satir["id"]."-".$satir["ad"]. " " . $satir["soyad"]."<br>";
    }
  }
  //Ekleme işlemi
  echo "<hr>";
  $sorgu=$db->insert('users')->set(['ad'=>'Hasan','soyad'=>'Yılmaz']);


    //Güncelleme işlemi
  echo "<hr>";
  $db->update('users')->where('id', 2)->set(['ad' => 'mehmet']);

  $sorgu = $db->from('users')->all();
   
    //Silme işlemi
    echo "<hr>";
  $db->delete('users')->where('id', 2)->done();


  //Tüm kayıtlar
  if ( $sorgu ){
    foreach ( $sorgu as $satir){
      echo $satir["id"]."-".$satir["ad"]. " " . $satir["soyad"]."<br>";
    }
  }

?>