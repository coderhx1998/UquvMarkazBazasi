<?php

include '../../connection.php';

$temp = false;

if(isset($_POST['submit'])){


$guruh = addslashes($_POST['guruhid']);
if($guruh){


$s = "select guruhid from guruhlar where 1";
$q = mysqli_query($con,$s);

while($r = mysqli_fetch_assoc($q))
	if($r['guruhid'] === $guruh){
		$temp = true;
	}

if(!$temp){

echo $temp;


$sqlpeops = "select count('guruhid') as count from people where guruhid = '$guruh'";

$peopls = mysqli_fetch_assoc(mysqli_query($con, $sqlpeops))['count'];

foreach ($_POST['teacher'] as $select)
if($select)$teacher = $select; 


$sql = "insert into guruhlar ( guruhid, peopls, teacher) values ('$guruh','$peopls','$teacher')";

$result = mysqli_query($con, $sql);

if($result) header('location:../../guruhlar.php');

}

 //header('location:../../admin.php');

}

}





if(isset($_POST['close'])) header('location:../../guruhlar.php');


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ma'lumot kiritish</title>
	<link rel="stylesheet" type="text/css" href="../../vendor/bootstrap/css/bootstrap.min.css">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">

	<form method="POST">
		<h3 class="my-3">Yangi guruh yaratish</h3>
	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Guruh qisqa nomi(M: mat1, mat2, fiz 3,...)</label>
  		<input type="text" name="guruhid" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting..."><?php if($temp) echo '<p class="text-danger">Guruhlar ro`yxatida mavjud bo`lmagan guruh kiriting</p>'; ?>
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Mavjud guruhlar ro'yxati</label>
  		
  		<select class="form-select" aria-label="Default select example">
  			<?php
  			$s = "select guruhid from guruhlar where 1";
  			$q = mysqli_query($con,$s);
  			while($r = mysqli_fetch_assoc($q))
  			echo '<option>'.$r['guruhid'].'</option>';
  			?>
  			
		</select>

	</div>

	<div class="mb-5">
  		<label for="exampleFormControlInput1" class="form-label">O'qituvchi biriktirish(tanlang):</label>
  		<br>
  		<select class="form-select" name = "teacher[]" aria-label="Default select example">
  			<?php
  			$s = "select familiya, ism, fan from teachers where 1";
  			$q = mysqli_query($con,$s);
  			while($r = mysqli_fetch_assoc($q))
  			echo '<option name="teacher" value="  '.$r['familiya'].' '.$r['ism'].'  ">'.$r['familiya'].' '.$r['ism'].'('.$r['fan'].')'.'</option>';
  			?>
  			
		</select>

	</div>

	<input type="submit" value="Saqlash" name="submit" class="btn btn-primary btn-sm">
	<input type="submit" value="Yopish" name="close" class="btn btn-secondary btn-sm">

	</form>

<script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>