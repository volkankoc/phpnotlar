<?php
session_start();
if ( $_SESSION['role']="admin"){
include_once("index.php");
include_once("./config/db.php");

?>
<div class="container">
    <div class="row">
        <div class="col-8 offset-2 mt-5">
            <div class="card p-3 border-">
                <div class="card-body">
                <h5 class="card-title">Yeni Yazı</h5>
                    <form action="" method="post">
                        
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Başlık</label>
                            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">İçerik</label>
                        <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="6"></textarea>
                    </div>
                       
                    <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Resim</label>
                            <input type="text" name="image" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="EKle">
                         
                    </div>

                </form>
            </div>
                
            </div>
        </div>
    </div>
</div>

<?php 
if ($_POST){

    $sorgu = $db->prepare("INSERT into posts SET title=:title,body=:body,author=:author,image=:image");
    $sorgu->bindValue(":title", $_POST['title']);
    $sorgu->bindValue(":body", $_POST['body']);
    $sorgu->bindValue(":author",$_SESSION["adsoyad"]);
    $sorgu->bindValue(":image",$_POST["image"]);
    $sorgu->execute();
    if ($sorgu->rowCount()>0)
    {
        echo "Yazı eklendi";
    }
    else
    {
        echo "hata oluştu";
    }
}
}
else {
    header("Location:index.php");
}
?>