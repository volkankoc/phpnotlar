
<?php
define("_bilgi",53);
/**
 * TODO:
 */
/**
 * Değişken türleri
 * int->tamsayı
 * string ->metinsel ifade
 * double(flooat) ->ondalıklı sayı
 * array -> dizi
 * object ->nesne
 * bool ->true false doğru yanlış
 */
$degisken1=25;
$degisken2="merhaba";
$degisken3=25.4;
$degisken4=array("mercedes","audi","ford","honda","toros","duster",53,53.7,true);
$degisken5=true;
/*
* Değişkenin türü hakkında bilgi alma
var_dump($degisken1);
var_dump($degisken2);
var_dump($degisken3);
var_dump($degisken4);
var_dump($degisken5);
*/
echo $degisken4[5];
var_dump($degisken4);

/**
 * Değişken tanımlama notasyonları
 * $topluGirisHesaplama
 * $TopluGirisHesaplama
 * $toplu_giris_hesaplama
 * sabit tanımlamalar büyük harfle yazılır
 * $VERI
 * 
 */
echo _bilgi;
?>