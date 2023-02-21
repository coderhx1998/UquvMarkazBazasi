<?php
session_start();

if($_SESSION['lavozim'] === 'admin') 
	include 'menu.php'; 

if($_SESSION['lavozim'] === 'teacher') 
	include 'menuForTeachers.php'; 

include 'connection.php';

$sql = 'select * from guruhlar';

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
	<h4>Guruhlar</h4>

	<div class="my-3">
    <!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
		<a href="./components/crudguruhlar/insert.php" class="text-light">
 		 + Kiritish
		</a>
	</button>
	</div>

<table class="table table-striped" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Guruh</th>
      <th scope="col">O'quvchilar soni</th>
      <th scope="col">Guruh o'qituvchisi</th>
      <th scope="col">amallar</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  	<?php

   	while ($f = mysqli_fetch_assoc($result)){

   	echo '
   	<tr>
  	<td>'.$f['id'].'</td>
  	<td>'.$f['guruhid'].'</td>
  	<td>'.$f['peopls'].'</td>
  	<td>'.$f['teacher'].'</td>
  	<td>

  	<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="border-radius:10px; padding:0; margin-right:10px;"><a href="./components/crudguruhlar/update.php?id='.$f['id'].'">
  <img src="./images/edit.png" width="20" style="margin: 0;"></a>
</buttoan>

<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="border-radius: 10px;padding:0; margin: 0;"><a href="./components/crudguruhlar/del.php?id='.$f['id'].'">
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