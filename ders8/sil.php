<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
    include_once "connection.php";

    $id = $_GET["id"];

    $sorgu = $conn->prepare("DELETE FROM bilgi WHERE id=:id");
    $sorgu->bindValue(":id", $id);
    $sorgu->execute();

    $sonuc = $sorgu->rowCount();
    if ($sonuc) {
        //header("Location:index.php");
    ?>
        <script src="text/ja"></script>
        <script>
            swal({
                title: "Silme İşlemi",
                text: "Silme İşlemi Başarıyla Yapıldı",
                icon: "success",
                
            });
        </script>
    <?php
    header("location:index.php");
    } else {
        ?>
        <script src="text/ja"></script>
        <script>
            swal({
                title: "Silme İşlemi",
                text: "HATA OLUŞTU SİLME İŞLEMİ YAPILAMADI",
                icon: "error",
            });

        </script>
<?php
 header("location:index.php refresh:2");
    }
    ?>