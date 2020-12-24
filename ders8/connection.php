<?php 
    
    $host ="www.bidunyabilgi.com";
    $username="bidunyab_phpders";
    $password="phpders";
    $database="bidunyab_phpders";

    // $host ="localhost";
    // $username="root";
    // $password="root";
    // $database="bilgi";

    try 
    {
        $conn=new PDO("mysql:host=$host;dbname=$database;charset=utf8",$username,$password);
      //echo "bağlandı";
    } catch (PDOException $err) 
    {
       echo $err->getMessage();
    }

   // $sorgu=$conn->prepare('INSERT INTO bilgi (ad,soyad,numara) value ("hasan","cumali",1001)');
   // $sorgu->execute();

   //KAyıt listelem işlemi
   //  $sorgu=$conn->prepare("SELECT * FROM bilgi WHERE ID>:id AND AD=:ad");
   //  $sorgu->bindValue(":id",3,PDO::PARAM_INT);
   //  $sorgu->bindValue(":ad","naim",PDO::PARAM_STR);
   //  $sorgu->execute();
   //  $data=$sorgu->fetchAll();

   //  foreach ($data as $row) {
   //    echo $row['ad']." ".$row['soyad']."<br />";
   
   //  }
    
    


   //  $sorgu = $conn->query("SELECT * FROM bilgi", PDO::FETCH_ASSOC);
    
   //  if ( $sorgu->rowCount() ){
   //     foreach( $sorgu as $row ){
   //        echo $row['ad']." ".$row['soyad']."<br />";
   //     }
   //  }
  
   


?>