<?php include_once("./config/init.php"); ?>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-4">
          <form method="POST" action="login.php">
            <div class="card" style="width: 28rem">
              <img
                src="https://picsum.photos/id/1060/536/354?blur=2"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label"
                    >Kullanıcı Adı</label
                  >
                  <input
                    type="text"
                    name="user"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="kullanıcı adı"
                  />
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label"
                    >Şifre</label
                  >
                  <input
                    type="password"
                    name="pass"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="şifreniz"
                  />
                </div>
                <div class="mb-3">
                  <input
                    class="btn btn-success"
                    type="submit"
                    value="Giriş Yap"
                  />
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>


<?php 

if ($_POST){
session_start();
session_regenerate_id();

$pass=md5($_POST['pass']);
$user=$_POST['user'];
include_once("./config/db.php");
$sorgu=$db->prepare("SELECT * FROM users WHERE username=:username");
$sorgu->bindValue(":username",$user);
$sorgu->execute();

if($sorgu->rowCount()>0){
    $row=$sorgu->fetch(PDO::FETCH_ASSOC);
    if ($row["pass"]==$pass)
    {
        session_start();
        $_SESSION['adsoyad']=$row["adsoyad"];
        $_SESSION['id']=$row["id"];
        $_SESSION['session_id']=session_id();
        $_SESSION['role']=$row["role"];
        $sorgu=$db->prepare("INSERT INTO sessions set session_id=:session_id,user=:user,cikis_saati=:cikis_saati");
        $sorgu->bindValue(":user",$row['username']);
        $sorgu->bindValue(":cikis_saati","");
        $sorgu->bindValue(":session_id",session_id());
        $sorgu->execute();
        header("location:index.php");

    }
    else{
        echo "şifre yanlış";
    }
}
else{
    echo "Kayıt Bulunamadı";
}

}
?>