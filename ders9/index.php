<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-4">
                <form method="POST">
                    <div class="card" style="width: 28rem;">
                        <img src="https://picsum.photos/id/1060/536/354?blur=2" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kullanıcı Adı</label>
                                <input type="text" name="user" class="form-control" id="exampleFormControlInput1" placeholder="kullanıcı adı">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Şifre</label>
                                <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="şifreniz">
                            </div>
                            <div class="mb-3">
                                <input class="btn btn-success" type="submit" value="Giriş Yap">

                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <?php
    //örnekte user=user password=1234
    session_start();
    
    if ($_POST)
    {
    $user=$_POST["user"];
    $password=$_POST["password"];

    if($user=="user" && $password=="1234")
        {
            $_SESSION[$user]=md5($password);
            header("location:giris.php");
        }
        else 
        {
            header("location:index.php");
        }

    }
    ?>