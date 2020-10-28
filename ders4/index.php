<?php
//Foreach kullanımı
//Çok boyutlu dizler
//Dizilerde key kullanımı
//Çok boyutlu diziler ile çalışma

$harfler=array("A","B","C","Ç","D","E","F","G","Ğ","H","I","İ","J","K","L","M","N","O");
$a=1;
foreach ($harfler as  $value) {
    echo "-$a=$value";
    $a++;
}
echo "<hr>";
foreach ($harfler as $key => $value) {
    echo "-$key=$value";
}
echo "<hr>";
$plaka=array("53"=>0,"61"=>"Trabzon","52"=>"Ordu","55"=>"Samsun","06"=>"Ankara");
foreach ($plaka as $key => $value) {
   echo "<br>$key=$value";
}
echo "<hr>";
$uye=array("volkan"=>12345,"ahmet"=>"1234ab","selim"=>9999);

if ($uye["volkan"]===12345)
    echo "şifre doğru";
else
    echo "şifre yanlış";
echo "<hr>";
$test= array("volkan",1234,"volkan@hotmail.com","rize",35);
echo $test;
// foreach ($test as $key => $value) {
//     echo "$value";
// }
echo "<hr>";
$profil=array(
    array("volkan",1234,"volkan@hotmail.com","rize",35),
    array("selim",5555,"selim@hotmail.com","ordu",50),
    array("selim",5555,"selim@hotmail.com","samsun",50),
    array("selim",5555,"selim@hotmail.com","ordu",50),
);
// 2.yol
for ($i=0; $i <4 ; $i++) { 
   for ($k=0; $k <5 ; $k++) { 
       echo $profil[$i][$k];
   }
}
// 1.yol
foreach ($profil as $key => $value) {
    foreach ($value as $key => $deger) {
       echo "<br>$deger";
    }
}
echo "<hr>";
$uyeler=array(
    array("user"=>"volkan","password"=>"12345","age"=>"35"),
    array("user"=>"ali","password"=>"444","age"=>"50"),
    array("user"=>"hasan","password"=>"5555","age"=>"30"),
    array("user"=>"mehmet","password"=>"6666","age"=>"32"),
    array("user"=>"okay","password"=>"777","age"=>"15"),
);
foreach ($uyeler as $key => $value) {
    foreach ($value as $key => $deger) {
       if ($key=="user" || $key=="password") echo "$deger";
    }
    echo "<br>";
}

?>