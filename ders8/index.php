<?php
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

<body>
   <table id="bilgiler" class="display" cellspacing="0" width="100%">
      <thead>
         <tr>
            <th>Id</th>
            <th>Ad</th>
            <th>Soyad</th>
            <th>Numara</th>
            <th>Sil</th>
         </tr>
      </thead>
      <tbody>
         <?php
         foreach ($sorgu as $row) {
         ?> <tr>
               <td><?= $row['id'] ?></td>
               <td><?= $row['ad'] ?></td>
               <td><?= $row['soyad'] ?></td>
               <td><?= $row['numara'] ?></td>
               <td><button class="btn btn-danger" onclick="sil(<?= $row['id'] ?>)">Sil</button></td>
                 
                  <!-- <a class="btn btn-danger" href="sil.php?id=<?= $row['id'] ?>">SİL</a> -->

               
            </tr>
         <?php
         }
         ?>
      </tbody>
   </table>


   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script>
      function sil(id){
                     swal({
                           title: "Silmek istediğinizden emin misiniz?",
                           text: "Kayıt silindikten sonra geri alınamaz",
                           icon: "warning",
                           buttons: true,
                           dangerMode: true,
                        })
                        .then((willDelete) => {
                           if (willDelete) {
                              location.href="http://localhost:8888/phpnotlar/ders8/sil.php?id="+id
                           } else {
                              swal("Silme işlemi iptal edildi");
                           }
                        });
                     }
   </script>
   <script type="text/javascript">
      $(function() {
         $('#bilgiler').DataTable({
            columnDefs: [{
               targets: [0, 1, 2, 3],
               className: 'dt-body-center'
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