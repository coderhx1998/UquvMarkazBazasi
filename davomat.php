<?php
session_start();

if($_SESSION['lavozim'] === 'admin') 
	include 'menu.php'; 

if($_SESSION['lavozim'] === 'teacher') 
	include 'menuForTeachers.php'; 

include 'connection.php';


echo "davomat";

?>