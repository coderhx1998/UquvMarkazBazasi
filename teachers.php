<?php
session_start();

if($_SESSION['lavozim'] === 'admin') 
	include 'menu.php'; 

if($_SESSION['lavozim'] === 'teacher') 
	include 'menuForTeachers.php'; 

include 'connection.php';

$sql = 'select * from teachers';

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
	<h4>O'qituvchilar</h4>

	<div class="my-3">
    <!-- Button trigger modal -->
  <a href="./components/crudteacher/insert.php" class="text-light">
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
 		 Kiritish
	</button></a>
	</div>

<table class="table table-striped" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Guruh</th>
      <th scope="col">Familiya</th>
      <th scope="col">Ism</th>
      <th scope="col">Tel</th>
      <th scope="col">Manzil</th>
      <th scope="col">Fan</th>
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
  	<td>'.$f['teacherid'].'</td>
  	<td>'.$f['guruhid'].'</td>
  	<td>'.$f['familiya'].'</td>
  	<td>'.$f['ism'].'</td>
  	<td>'.$f['tel'].'</td>
  	<td>'.$f['manzil'].'</td>
  	<td>'.$f['fan'].'</td>
  	<td>'.$f['maosh'].'</td>
  	<td>

  	<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="border-radius:10px; padding:0; margin-right:10px;"><a href="./components/crudteacher/update.php?teacherid='.$f['teacherid'].'">
  <img src="./images/edit.png" width="20" style="margin: 0;"></a>
</buttoan>

<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="border-radius: 10px;padding:0; margin: 0;"><a href="./components/crudteacher/del.php?teacherid='.$f['teacherid'].'">
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