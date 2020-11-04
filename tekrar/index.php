<?php 
define("PASSWORD",12345);
/**
 * iç içe dizi tanımlayıp bu değerlere erişme
 */
echo "Hoşgeldiniz" .PASSWORD;
 $var1=array("volkan",-214748364,10.1,true,false,array(53,"B","C","D",array(1,2,3)));

/* print_r($var1);
echo "<hr>";
echo $var1[5][4][1]; */
echo "<hr>";

$durum1=true;
$durum2=true;
$durum3=true;
//durum değişkeni true mi ?
//if($durum) ile if($durum==true) aynı şeydir true mi diye sorar
//if(!$durum) ile if($durum=!true) aynı şeydir true değil mi diye sorar
if(!$durum1)
    echo "işlem tamam";
echo "<hr>";
if ($durum1&&$durum2&&$durum3) //üç durumda true ise çalışır
    echo "üç koşulda sağlandı 1";
echo "<hr>";
if ($durum1==true && $durum2===true && $durum3===true) //üç durumda true ise çalışır
    echo "üç koşulda sağlandı 2";
echo "<hr>";
if($durum1)
    if($durum2)
        if($durum3)   
            echo "üç koşulda sağlandı 3";
        else
            echo "3. şart hatalı";
    else
        echo "2. şart hatalı";
else
    echo "1. şart hatalı";

echo "<hr>";

if ($durum1) 
{
    if ($durum2) 
    {
        if ($durum3) 
        {
            echo "üç koşulda sağlandı 3";
        } 
        else 
        {
            echo "3. şart hatalı";
        }        
    } 
    else 
    {
        echo "2. şart hatalı";
    }   
} 
else 
{
    echo "1. şart hatalı";

}
echo "<hr>";

echo ($durum1) ? "şart sağlandı" : "şart sağlanamadı" ;  
//çocuk sayısı 2 den fazla ise yüzde 20 zamlı maaş alan diğer durumlarda ise
// yüzde 15 zamlı maaşı hesaplayan programı tenary operatörü kullanarak yazalım

$maas=5000;
$cocukSayisi=2;
$yeniMaas=($cocukSayisi>2) ? $maas+=$maas*0.20 : $maas+=$maas*0.15;
//$maas+=$maas*0.20 ile bu ifade aynıdır  $maas=$maas+$maas*0.20
echo "GÜNCEL MAAŞ:$yeniMaas";
echo "<hr>";
echo "<table border='1'>";
for ($i=1; $i <=1000 ; $i++) { 
    if ($i%10==0)   
        echo "<td style='background-color:red'>$i</td>";
    else
        echo "<td>$i</td>";
    if ($i%100==0)
        echo "<tr style='background-color:yellow'>";

}
echo "</table>";

?>