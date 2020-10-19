<?php
/**
 * Tenary kullanımı */ 
$yas=21;
/*
if ($yas>20) {
   echo "ehliyet alabilir";
}
else {
    echo "ehliyet alamazsın";
}
*/
$maas=500;
$cocukSayisi=5;
$yeniMaas = ($maas<1000) ? $maas+$cocukSayisi*100 : $maas+$cocukSayisi*50 ;
echo $yeniMaas;
echo "<br>";
/**
 * Random ve for kullanımı
 */
$sayilar=array();
//atama yapmak için döngü kullandık
for ($i=0; $i <10 ; $i++) { //döngü işlemin tekrar sayısını belirler
  array_push($sayilar,rand(0,100));
}
//dizi içindeki verileri ekrana yazmak için kullandık
for ($i=0; $i <10 ; $i++) { 
    echo $sayilar[$i];
    echo "<br>";
}




?>