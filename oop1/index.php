<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Veritabı Class Kullanımı</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <form action="" method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" name="ad" id="" placeholder="Adınız">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="soyad" id="" placeholder="Soyadınız">
                    </div>
                    <input class="btn btn-success" type="submit" name="ekle" value="Ekle" id="ekle">
                </form>

            </div>
            <div class="col-3">
                <form action="" method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" name="id" id="" placeholder="Silinecek id">
                    </div>
                    <input class="btn btn-success" type="submit" value="Sil" name="sil">
                </form>

            </div>
            <div class="col-3">
                <form action="" method="post">
                    <div class="form-group">
                        <input class="form-control" type="text" name="ad" id="" placeholder="Arama yapılacak ad">
                    </div>

                    <input class="btn btn-success" type="submit" value="Ara" name="ara">
                    <input class="btn btn-success" type="submit" value="Tüm Kayıtları Getir" name="tara">
                </form>

            </div>
        </div>
    </div>

    <?php
        include_once("DB.php");
        $baglan = new DB();


    if ($_POST["ekle"]){
            $ad=$_POST['ad'];
            $soyad=$_POST['soyad'];
            $baglan->ekle($ad,$soyad);
    }

    if ($_POST["sil"]){
            $id=$_POST['id'];
            $baglan->sil($id);
    }

    if ($_POST["ara"]){
            $ad=$_POST['ad'];
            $baglan->idKayitGetir($ad);
    }
    if ($_POST["tara"]){
 
            $baglan->tumKayitlariGetir();
    }


    ?>