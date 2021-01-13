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
                    <a class="nav-link" href="newpost.php">Yeni Yazı</a>
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
            $hr=0;
            while ($row = $sorgu->fetch(PDO::FETCH_ASSOC)) { $hr++;
            ?>
                
                    <div class="col-6">
                        <h3 class="text-warning"><a href="blogdetay?id=<?=$row["id"]?>"> <?= $row["title"] ?></a></h3>
                        <p> <?= substr($row["body"], 100) ?></p>
                        <div class="row mb-3">
                            <div class="col-6">
                                Yazar : <span class="text-success"><?= $row["author"] ?></span>
                            </div>

                            <div class="col-6 text-right">
                                Tarih : <span class="text-danger"><?= $row["date"] ?></span>

                            </div>
                        </div>
                    </div>
                 

            <?php
              if ($hr%2==0) echo "<hr>";
            }


            ?>
        </div>
    </div>
</div>
</div>