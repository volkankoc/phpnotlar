<?php 
$id=$_GET["id"];
$ad=$_GET["ad"];
$soyad=$_GET["soyad"];
$numara=$_GET["numara"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kayıt Düzenleme</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-3.3.1.min.js"
    ></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-8 offset-2">
          <form onSubmit="return false" id="veriler">
          <div class="form-group">
              <input
                type="text"
                name="id"
                class="form-control"
                aria-describedby="emailHelp"
                hidden
                value=<?=$id?>
              />
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Adınızı</label>
              <input
                type="text"
                name="ad"
                class="form-control"
                aria-describedby="emailHelp"
                value=<?=$ad?>
              />
              <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Soyadınız</label>
              <input
                type="text"
                name="soyad"
                class="form-control"
                value=<?=$soyad?>
              />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Numaranız</label>
              <input
                type="number"
                name="numara"
                class="form-control"
                value=<?=$numara?>
              />
            </div>

            <div class="form-group">
              <button id="guncelle" class="btn btn-primary" name="ekle">
                Güncelle
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <h2 id="sonuc"></h2>
    <script type="text/javascript">
      $("#guncelle").click(function () {
        
        $.ajax({
          type: "POST",
          url: "edit.php",
          data: $("#veriler").serialize(),
          success: function (sonuc) {
            $("#sonuc").html(sonuc);
          },
          statusCode:{
                    500: function (err) {
                      $("#sonuc").html(err.status);
                      }
                    },
          error: function (err) {
            $("#sonuc").html(err);
          },
        });
      });
    </script>
  </body>
</html>
