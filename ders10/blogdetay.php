<?php
include_once("./config/init.php");
include_once("./config/db.php");

session_start();
?>
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
            $post_id = $_GET['id'];
            $sorgu = $db->prepare("SELECT * FROM posts WHERE id=:post_id");
            $sorgu->bindValue(":post_id", $post_id);
            $sorgu->execute();
            while ($row = $sorgu->fetch(PDO::FETCH_ASSOC)) {
            ?>

                <div class="col-8">
                    <h3 class="text-warning"><a href="blogdetay?id=<?= $row["id"] ?>"> <?= $row["title"] ?></a></h3>
                    <p> <?= $row["body"] ?></p>
                    <div class="text-center">
                                    <img src="<?=$row["image"]?>" class="img-thumbnail" alt="...">
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            Yazar : <span class="text-success"><?= $row["author"] ?></span>
                        </div>

                        <div class="col-6 text-right">
                            Tarih : <span class="text-danger"><?= $row["date"] ?></span>

                        </div>
                    </div>
                </div>
                <div class="col-4">
                <ul class="list-group">
                <?php
            } //end while
            //Tüm postların başlıkları çekiliyor
            $sorgu = $db->prepare("SELECT * FROM posts");
            $sorgu->execute();
            while ($row = $sorgu->fetch(PDO::FETCH_ASSOC)) 
            {
                if($post_id==$row["id"]){ ?>
                    <li class="list-group-item bg-warning" aria-current="true"> <span class="text-white"><a href="blogdetay.php?id=<?= $row["id"] ?>"> <?= $row["title"] ?></a></span></li>                    
                <?php 
                }
                else { ?>
                    <li class="list-group-item"><span class="text-warning"><a href="blogdetay.php?id=<?= $row["id"] ?>"> <?= $row["title"] ?></a></span></li>                    
               <?php }
            }
                ?>
                </ul>
                </div>
        </div>
    </div>
</div>
</div>