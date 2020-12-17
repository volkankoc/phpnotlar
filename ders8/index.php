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
			</tr>
		</thead>
		<tbody>
         <?php
            foreach( $sorgu as $row )
            {
               ?>    <tr>
                     <td><?=$row['id']?></td>
                     <td><?=$row['ad']?></td>
                     <td><?=$row['soyad']?></td>
                     <td><?=$row['numara']?></td>
                     </tr>
               <?php
            }
         ?>
		</tbody>
   </table>
   

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script type="text/javascript">
		$(function(){
			$('#bilgiler').DataTable({
            columnDefs: [
    {
        targets: [0,1,2,3],
        className: 'dt-body-center'
    }
  ]
         });
		});
	</script>
</body>
</html>


