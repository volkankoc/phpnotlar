<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
function mesaj($isim = "Misafir")
{
    echo "<br>Hoşgeldiniz! $isim";
}
function bilgi()
{
    return "Merhaba";
}
function kareAl($sayi)
{
    return $sayi * $sayi;
}
//Yamuk alanı: (Alttaban+Üsttaban)*yükseklik/2
function yamukAlan($altTaban,$ustTaban,$yukselik){
    hr();
    $sonuc=($altTaban+$ustTaban)*$yukselik/2;
    return $sonuc;
}
// Ehliyet yaş durum hesaplama
function ehliyetYasSorgula($yas){
    hr();
    if ($yas>=18) {
        echo '<p class="bg-success">Ehliyet alabilir</p>';
    } else {
        echo '<p class="bg-danger">Ehliyet alamaz</p>';
    }
    
}
// hr metodu
function hr(){
    echo "<hr class='bg-primary'>";
}
// başlangıç bitiş ve artış miktarına göre sonuç döndüren metot
function araDegerler($bas,$bit,$art){
    hr();
    for ($i=$bas; $i <=$bit ; $i+=$art) { 
        echo $i;
    }
}
//Ara değerleri bir diziye atan metot
function araDegerDizi($bas,$bit){
    hr();
    $deger=Array();
    for ($i=$bas; $i <=$bit ; $i++){
       array_push($deger,$i);
    }

    return $deger;
}
// istenilen miktarda rasgele sayı üretmek
function rasgeleSayiUret($adet){
    hr();
    $deger=Array();
    for ($i=0; $i <=$adet ; $i++){
       array_push($deger,rand(0,100));
    }

    return $deger;
}


?>