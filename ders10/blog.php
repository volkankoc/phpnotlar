<?php
include_once("./config/init.php");
include_once("./config/db.php");

session_start();
?>
<style>
    a {
        text-decoration: none;
    }
</style>
<div class="container mt-5">
    <div class="row">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.php">Anasayfa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="blog.php">Yazılar</a>
            </li>
            <?php
            if ($_SESSION['role'] == "admin") {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Yeni Yazı</a>
                </li>

            <?php
            } else {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Giriş Yap</a>
                </li>

            <?php
            }
            ?>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Hakkında</a>
            </li>
        </ul>

    </div>
    <div class="row mt-5">
        <div class="row">

            <?php
            $sorgu = $db->prepare("SELECT * FROM posts");
            $sorgu->execute();
          
            while ($row = $sorgu->fetch(PDO::FETCH_ASSOC)) {
            ?>
                
                    <div class="col-6 mb-2">
                        <div class="card border-info">
                            <div class="card-header border-warning">
                                <h4 class="text-warning"><a href="blogdetay.php?id=<?=$row["id"]?>"> <?= $row["title"] ?></a></h4>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="<?=$row["image"]?>" class="img-thumbnail" alt="...">

                                </div>
                                <p> <?= substr($row["body"], 0,200) ?></p>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        Yazar : <span class="text-success"><?= $row["author"] ?></span>
                                    </div>
        
                                    <div class="col-6 text-right">
                                        Tarih : <span class="text-danger"><?= $row["date"] ?></span>
                                    <?php if ($_SESSION['role'] == "admin") {
                                        ?>
                                        <a class="btn btn-outline-danger" href="sil.php?id=<?=$row["id"]?>">Sil</a>
                                    <?php }?>  
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                 

            <?php
             
            }


            ?>
        </div>
    </div>
</div>
</div>