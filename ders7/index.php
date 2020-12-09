<?php 
    include_once("func.php");

     mesaj();
     mesaj("hakan");
     mesaj();
     mesaj("selim");
    echo bilgi();
    echo kareAl(25);

    echo "Yamuğun alanı=".yamukAlan(5,2,13);

    echo ehliyetYasSorgula(21);

    araDegerler(100,140,5);
    //var_dump(araDegerDizi(10,50));
    $sayilar=rasgeleSayiUret(30);

    foreach ($sayilar as $value) 
      echo ehliyetYasSorgula($value).$value;
    
    

?>