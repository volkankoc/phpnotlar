<?php
// VERİ TABANI BAĞLATI DOSYASINI EKLENDİ
// SELECT SORGUSU İLE TÜM KAYITLAR ÇEKİLİP SORGU DEĞİŞKENİNE ATILDI
include_once("connection.php");
$sorgu = $conn->query("SELECT * FROM bilgi", PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
</head>

<body class="bg-warning">
   <div class="container">
      <div class="row">
         <div class="col-md-2 offset-10 mb-2 mt-2">
            <!-- EKLE BUTONU İLE MODAL İÇİNDE KAYIT FORMU AÇILMASI SAĞLANDI -->
            <div class="d-grid gap-2">
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kayitEkle">
                  Kayıt Ekle
               </button>
            </div>

         </div>
      </div>
      <!-- MODAL İÇİNDEKİ KAYIT FORMU TASARIMI -->
      <div class="modal fade" id="kayitEkle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Yeni Kayıt</h5>
                  <button type="button" onclick="yenile()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <!-- FORM BİLGİLERİ VERİLER İSİMLİ İD İLE GÖNDERİLİYOR -->
                  <form onSubmit="return false" id="veriler">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Adınızı</label>
                        <input type="text" name="ad" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                        <small id="emailHelp" class="form-text text-muted"></small>
                     </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Soyadınız</label>
                        <input type="text" name="soyad" class="form-control" id="exampleInputPassword1" />
                     </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Numaranız</label>
                        <input type="number" name="numara" class="form-control" id="exampleInputPassword1" />
                     </div>
                  </form>
               </div>
               <!-- KAPAT BUTONU İLE YENİLE FONKSİYONU ÇAĞRILIYOR
                    EKLE BUTONA TIKLANDIĞINDA EKLEME İŞLEMİ GERÇEKLEŞİYOR -->
               <div class="modal-footer">
                  <button type="button" onclick="yenile()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button id="ekle" class="btn btn-primary" name="ekle">Ekle</button>
               </div>
            </div>
         </div>
      </div>
      <!-- GÜNCELLEME MODAL FORUM -->
      <div class="modal fade" id="kayitDuzenle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">KAYIT DÜZENLE</h5>
                  <button type="button" onclick="yenile()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <!-- FORM BİLGİLERİ VERİLER İSİMLİ İD İLE GÖNDERİLİYOR -->
                  <form onSubmit="return false" id="verilerEdit">
                     <div class="form-group">
                        <input type="text" name="id" id="e_name" class="form-control" aria-describedby="emailHelp" hidden />
                        <small id="emailHelp" class="form-text text-muted"></small>
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Adınızı</label>
                        <input type="text" name="ad" class="form-control" aria-describedby="emailHelp"  />
                        <small id="emailHelp" class="form-text text-muted"></small>
                     </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Soyadınız</label>
                        <input type="text" name="soyad" class="form-control" />
                     </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Numaranız</label>
                        <input type="number" name="numara" class="form-control"  />
                     </div>

                     <div class="form-group">
                     
                     </div>
                  </form>
               </div>
               <!-- KAPAT BUTONU İLE YENİLE FONKSİYONU ÇAĞRILIYOR
                    EKLE BUTONA TIKLANDIĞINDA EKLEME İŞLEMİ GERÇEKLEŞİYOR -->
               <div class="modal-footer">
                  <button id="duzenle" class="btn btn-primary" name="duzenle">Düzenle</button>
               </div>
            </div>
         </div>
      </div>
      <!-- DATATABLES İÇİN TABLO OLUŞTURULUYOR TABLO İDSİ bilgiler OLARAK GİRİLDİ -->
      <table id="bilgiler" class="display" cellspacing="0" width="100%">
         <thead>
            <tr>
               <th>Id</th>
               <th>Ad</th>
               <th>Soyad</th>
               <th>Numara</th>
               <th>Sil</th>
               <th>Düzenle</th>
            </tr>
         </thead>
         <tbody>
            <!-- YUKARIDA YAPILAN SQL SORUGUSU SONUCUNA ALINAN VERİLER
                  DÖNGÜ İLE SATIR OLUŞTURULUP TABLOAYA EKLENİYOR -->
            <?php
            foreach ($sorgu as $row) {
            ?> <tr>
                  <td><?= $row['id'] ?></td>
                  <td><?= $row['ad'] ?></td>
                  <td><?= $row['soyad'] ?></td>
                  <td><?= $row['numara'] ?></td>
                  <td>
                     <button class="btn btn-danger" onclick="sil(<?= $row['id'] ?>)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                           <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                        </svg>
                     </button>
                  </td>
                  <td>
                     <button type="button" onclick="veriGetir()" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kayitDuzenle">
                        Kayıt Düzenle
                     </button>
                  </td>

                  <!-- <td>
                     <a href="editajax.php?id=<?= $row['id'] ?>&ad=<?= $row['ad'] ?>&soyad=<?= $row['soyad'] ?>&numara=<?= $row['numara'] ?>">Düzenle</a>
                  </td> -->
                  <!-- <td>
                     <button class="btn btn-primary" onclick="sil(<?= $row['id'] ?>)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                           <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                           <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                     </button>
                  </td> -->

               </tr>
            <?php
            }
            ?>
         </tbody>
      </table>
   </div>
   <!-- SAYFADA KULLANILAN JAVASCRİPT KÜTÜPHANELERİ ÇAĞRILIYOR -->
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
   <!-- KAPAT BUTONUNA BASILDIĞINDA SAYFA YENİLEMESİ YAPAN METOT -->
   <script>
      function veriGetir(){
     
         var x = document.getElementById("e_name");
         console.log(x);
      }
   </script>
   <script>
      function yenile() {
         location.href = "index.php";
      }
   </script>
   <!-- EKLE BUTONUNA BASILDIĞINA AJAX YARDIMIYLA VERİLEN ekleajax.php SAYFASINA GİDEREK
         KAYIT İŞLEMİ GERÇEKLEŞTİREN FONKSİYON -->
   <script type="text/javascript">
      $("#ekle").click(function() {

         $.ajax({
            type: "POST",
            url: "ekleajax.php",
            data: $("#veriler").serialize(),
            success: function(sonuc) {
               swal("İŞLEM BAŞARILI", sonuc, "success");
            },
            statusCode: {
               500: function(err) {
                  swal("HATA OLUŞTU", sonuc, "error");
               }
            },
            error: function(err) {
               swal("KAYIT YAPILAMADI", sonuc, "error");
            },
         });
      });
   </script>
   <!-- SİLME İŞLEMİNDEN ÖNCE KULLANIYA ONAY MESAJI VEREN SWAL FONKSİYONU -->
   <script>
      function sil(id) {
         swal({
               title: "Silmek istediğinizden emin misiniz?",
               text: "Kayıt silindikten sonra geri alınamaz",
               icon: "warning",
               buttons: true,
               dangerMode: true,
            })
            .then((willDelete) => {
               if (willDelete) {
                  location.href = "http://localhost:8888/phpnotlar/ders8/sil.php?id=" + id
               } else {
                  swal("Silme işlemi iptal edildi");
               }
            });
      }
   </script>
   <!-- YUKARI OLUŞTURAN TABLODAKİ VERİLEN DATATABLES NESNESİNE AKTARILMASI -->
   <script type="text/javascript">
      $(function() {
         $('#bilgiler').DataTable({
            
            columnDefs: [{
               targets: [0, 1, 2, 3, 4, 5],
               className: 'dt-body-center,dt-head-center'
            }],
            language: {
               "decimal": ",",
               "emptyTable": "Tabloda herhangi bir veri mevcut değil",
               "info": "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
               "infoEmpty": "Kayıt yok",
               "infoFiltered": "(_MAX_ kayıt içerisinden bulunan)",
               "infoThousands": ".",
               "lengthMenu": "Sayfada _MENU_ kayıt göster",
               "loadingRecords": "Yükleniyor...",
               "processing": "İşleniyor...",
               "search": "Kayıtlarda Ara:",
               "zeroRecords": "Eşleşen kayıt bulunamadı",
               "paginate": {
                  "first": "|<",
                  "last": ">|",
                  "next": ">>",
                  "previous": "<<"
               },
               "aria": {
                  "sortAscending": ": artan sütun sıralamasını aktifleştir",
                  "sortDescending": ": azalan sütun sıralamasını aktifleştir"
               },
               "select": {
                  "rows": {
                     "_": "%d kayıt seçildi",
                     "1": "1 kayıt seçildi"
                  }
               }
            }
         });
      });
   </script>
</body>

</html>