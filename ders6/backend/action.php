<?php 
if ($_POST) {
    if (is_numeric($_POST["sayi1"]) && is_numeric($_POST["sayi2"])){
        $sayi1 = $_POST["sayi1"];
        $sayi2 = $_POST["sayi2"];
        $toplam = $sayi1 * $sayi2;
        echo $toplam;
    }else {
        $mesaj="Numerik olmayan bir veri girişi yapıldı";
        
    }
    
    
}
?>