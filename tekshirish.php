<?php
session_start();
include "connection.php";

$query = mysqli_query($con, "Select * from admin");

$login = $_POST['login'];
$parol = $_POST['parol'];

if($query){

	$temp = false;

	while($result = mysqli_fetch_assoc($query)){

		if($login === $result['email'] && $parol === $result['parol'] && $result['lavozim'] === 'admin'){
			$_SESSION['lavozim'] = 'admin';
			header('location:admin.php');
			$temp = true;
			break;

		}

		if($login === $result['email'] && $parol === $result['parol'] && $result['lavozim'] === 'teacher'){
			header('location:davomat.php');
			$_SESSION['lavozim'] = 'teacher';
			$temp = true;
			break;

		}

	}

	if(!$temp) echo "<a href='index.php'>Siz ro'yxatdan o'tmagansiz</a>";
}


?>