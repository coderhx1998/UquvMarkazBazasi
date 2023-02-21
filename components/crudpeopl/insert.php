<?php

include '../../connection.php';



if(isset($_POST['submit'])){


foreach($_POST['guruhlar'] as $g)
	if($g)$guruh = addslashes(substr($g,0,stripos($g,'(')));

$familiya = addslashes($_POST['familiya']);
$ism = addslashes($_POST['ism']);

foreach($_POST['kurslar'] as $kurs)
	if($kurs) $fan = addslashes($kurs);

$tel = addslashes($_POST['tel']);
$qabul = addslashes($_POST['qabul']);
$tulov = addslashes($_POST['tulov']);

$sql = "insert into people (guruhid, familiya, ism, fan, tel, qabul,tulov) values ('$guruh','$familiya','$ism','$fan','$tel','$qabul','$tulov')";

$result = mysqli_query($con, $sql);

if($result) header('location:../../peopls.php');

 //header('location:../../admin.php');

}

if(isset($_POST['close'])) header('location:../../peopls.php');


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

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Guruh(tanlang)</label>
  		<select class="form-select" name="guruhlar[]" aria-label="Default select example">
  			<?php
  			$s = "select guruhid, teacher from guruhlar where 1";
  			$q = mysqli_query($con,$s);
  			while($r = mysqli_fetch_assoc($q))
  			echo '<option>'.$r['guruhid'].'(O`qituvchi: '.$r['teacher'].')</option>';
  			?>
  			
		</select>
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Familiya</label>
  		<input type="text" name="familiya" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Ism</label>
  		<input type="text" name="ism" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Fan(tanlang)</label>
  		<select class="form-select" name="kurslar[]" aria-label="Default select example">
  			<?php
  			$s = "select kursnomi from kurslar where 1";
  			$q = mysqli_query($con,$s);
  			while($r = mysqli_fetch_assoc($q))
  			echo '<option>'.$r['kursnomi'].'</option>';
  			?>
  			
		</select>
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Tel</label>
  		<input type="text" name="tel" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Qabul sanasi</label>
  		<input type="text" name="qabul" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<div class="mb-3">
  		<label for="exampleFormControlInput1" class="form-label">Tulov miqdori</label>
  		<input type="text" name="tulov" class="form-control" id="exampleFormControlInput1" placeholder="Kiriting...">
	</div>

	<input type="submit" value="Saqlash" name="submit" class="btn btn-primary btn-sm">
	<input type="submit" value="Yopish" name="close" class="btn btn-secondary btn-sm">

	</form>
</body>
</html>