<?php
if ($_POST) {
    if (is_numeric($_POST["sayi1"]) && is_numeric($_POST["sayi2"])){
        $sayi1 = $_POST["sayi1"];
        $sayi2 = $_POST["sayi2"];
        $toplam = $sayi1 * $sayi2;
    }else {
        $mesaj="Numerik olmayan bir veri girişi yapıldı";
    }
   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php form işlemleri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST" class="mt-5">
                    <input class="form-control" type="text" name="sayi1" />
                    <input class="form-control" type="text" name="sayi2" />
                    <input class="form-control" type="text" name="toplam" placeholder="<?=empty($mesaj)?"İşlem Yapınız":$mesaj?>" value="<?= $toplam ?>" />
                    <input type="submit" value="Gönder">
                </form>
            </div>
        </div>