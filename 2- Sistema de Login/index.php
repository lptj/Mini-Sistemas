<?php
session_start();

if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
	echo "�rea restrita...";
}else{
	header("Location: login.php");
}

?>