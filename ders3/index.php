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
echo "<hr>";
//Rasgele üretilen 50 adet sayıyı önce bir dizi içine atıp ardından
//bu sayılardan kaç tanesinin çift olduğunu söyleyen programı yazalım

$rasgele=array();
for ($i=0; $i <50; $i++)  {
    array_push($rasgele,rand(0,100));
    echo "$rasgele[$i]-";
}
echo "<hr>";
/**
 * Dizinin elemanlarından çift olanları ekrana yazdırma
 */
for ($i=0; $i <50; $i++)  {
  if ($rasgele[$i]%2==0)
       echo "$rasgele[$i]-";
}
echo "<hr>";
/**
 * Dizinin elemanlarından tek ve çift olanların sayısını
 * Tek for ve if kullanarak bulma
 */
$tek=0;
$cift=0;

for ($i=0;$i<50;$i++) 
    if($rasgele[$i]%2==0)
      $cift++;
    else
      $tek++;

echo "Tek=$tek - Çift=$cift";
echo "<hr>";

/**
 * Dizinin elemanlarından tek ve çift olanlar tenary ile bulma
 */
$t=0;$c=0;
for ($i=0;$i<50;$i++) ($rasgele[$i]%2==0)?$c++:$t++;
    echo "Tek=$t - Çift=$c";

/**
 * İç içe tenary ?: operatörü kullanımı
 */
$yas=10;
$c="B";
echo ($yas>20)?($c=="E"?"Askere gidebilir":"Bayanlar askere gidemez"):"Yaşının Tutmuyor";

echo "<hr>";
/**
 * Diziye eklenen son eklenen elemanı çıkarma
 * array_pop($rasgele);
 */
echo count($rasgele);//dizinin eleman sayısını veriri

/**
 * Dizinin son 10 elemanını ekrana yazdırma
 */
for ($i=count($rasgele); $i>=count($rasgele)-10 ; $i--) { 
  echo "$rasgele[$i]-";
}
/**
 * Dizinin elemanları karma
 */

 shuffle($rasgele);
/**
 * Dizinin elemanlarını ekrana yazdırma
 */
echo "<hr>";
for ($i=0; $i <50 ; $i++) { 
  echo "$rasgele[$i]-";
}
/**
 * 1-20 ye kadar olan sayıları sırasıyla bir diziye aktarma
 */
echo "<hr>";
$numaralar=array();
for ($i=0; $i <20 ; $i++) { 
  array_push($numaralar,($i+1));
  echo "$numaralar[$i]-";
}
//dizinin elemanalarını karıştırdık
shuffle($numaralar);
//karma işleminden sonra elemanları tekrar listeledik
echo "Karmadan sonra <hr>";
for ($i=0; $i <20 ; $i++) { 
  echo "$numaralar[$i]-";
}
sort($numaralar);
echo "<hr>";
for ($i=0; $i <20 ; $i++) { 
  echo "$numaralar[$i]-";
}





?>
