<?php 
/**
 * Koşul deyimleri if els 
 * switch case
 */
/**
 * Yaşı 18 den büyükse ehliyet alabilir örneği
 */

$yas=15;
 if ($yas>=18) {
    echo("Ehliyet alabilir");
 }
 else {
     echo "Ehliyet için yaşınız küçük";
 }

 /**
  * if durumlarda çoklu şart
  */
/**
 * Aşağıdaki verilere göre covid19 pozitif olma ihtimaline hesaplayan program
 * Tüm değerler true ise %100 pozitif
 * Değerlerden herhangi iki tanesi pozitif ise %66 pozitif olma ihtimali var
 * Değerlerde sadece bir tanesi pozitif ise %33 pozitif olma ihtimal var
 */
echo "<br>";
  $ates_varmi=false;
  $oksuruk_varmi=true;
  $bas_agrisi_varmi=false;
  //3 lü şart kullanımı
  if ($ates_varmi && $bas_agrisi_varmi && $oksuruk_varmi ) {
      echo "%100 pozitif vakasınız";
  }
  else if(($ates_varmi && $bas_agrisi_varmi)||($ates_varmi && $oksuruk_varmi)||($oksuruk_varmi && $bas_agrisi_varmi)){
      echo "%66 pozitif vakasınız";
  }
  else if($ates_varmi|| $bas_agrisi_varmi || $oksuruk_varmi ) {
    echo "%33 pozitif vakasınız";
}
else {
    echo "temizsiniz";
}




?>