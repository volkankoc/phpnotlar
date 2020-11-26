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
                    <input class="form-control" type="text" name="ad" />
                    <input class="form-control" type="text" name="soyad" />
                    <input type="submit" value="Gönder">
                </form>
            </div>
        </div>


    <?php 
   $re = '/[a-zA-Z0-9]/m';
   $ad = $_POST['ad'];
 
   $_ad=preg_match_all($re, $ad, $matches, PREG_SET_ORDER, 0);

   if (strlen($ad)!=$_ad){
       echo "Kullanıcı Adı geçersiz a-zA-z0-9 kullanabilirsiniz.";
   }
   
   
//    foreach ($matches as $value) {
//        echo $value[0];
//    }
     //echo $_POST['ad'];
     echo "<br>";
    // echo htmlspecialchars($_POST['ad']);
    // $ad=$_POST['ad'];
    // $soyad=$_POST['soyad'];
    // echo "$ad $soyad";
    
    ?>
    </div>