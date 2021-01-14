<?php 
    include_once("./config/init.php"); 
    session_start();
?>
<div class="container mt-5">
    <div class="row">
        <ul class="nav nav-pills nav-fill">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Anasayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Yazılar</a>
          </li>
          <?php
            if($_SESSION['role']=="admin")
            {
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">Yeni Yazı</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="exit.php">Çıkış</a>
                    </li>
        
                <?php
            }
            else
            {
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
</div>