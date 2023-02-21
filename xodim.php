<?php
session_start();

if($_SESSION['lavozim'] === 'admin') 
	include 'menu.php'; 

if($_SESSION['lavozim'] === 'teacher') 
	include 'menuForTeachers.php'; 

include 'connection.php';

$sql = 'select * from xodim';

$result = mysqli_query($con,$sql);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./vendor/bootstrap/css/bootstrap.min.css">
	<title></title>
</head>
<body>

<div class="container-fluid my-3">
	<h4>Xodimlar</h4>

	<div class="my-3">
    <!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
		<a href="./components/crudxodim/insert.php" class="text-light">
 		 Kiritish
		</a>
	</button>
	</div>

<table class="table table-striped" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Familiya</th>
      <th scope="col">Ism</th>
      <th scope="col">Tel</th>
      <th scope="col">Manzil</th>
      <th scope="col">Lavozim</th>
      <th scope="col">Maosh(so'm)</th>
      <th scope="col">amallar</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  	<?php

   	while ($f = mysqli_fetch_assoc($result)){

   	echo '
   	<tr>
  	<td>'.$f['xodimid'].'</td>
  	<td>'.$f['familiya'].'</td>
  	<td>'.$f['ism'].'</td>
  	<td>'.$f['tel'].'</td>
  	<td>'.$f['manzil'].'</td>
  	<td>'.$f['lavozim'].'</td>
  	<td>'.$f['maosh'].'</td>
  	<td>

  	<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="border-radius:10px; padding:0; margin-right:10px;"><a href="./components/crudxodim/update.php?xodimid='.$f['xodimid'].'">
  <img src="./images/edit.png" width="20" style="margin: 0;"></a>
</buttoan>

<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="border-radius: 10px;padding:0; margin: 0;"><a href="./components/crudxodim/del.php?xodimid='.$f['xodimid'].'">
  <img src="./images/remove.png" width="20" style="margin: 0;"></a>
</button>

  	</td>
  	</tr>';
  	}
  	?>
  </tbody>
</table>


</div>


</body>
</html>