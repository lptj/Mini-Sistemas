<?php

try{
	$pdo = new PDO("mysql:dbname=projeto_ordenar;host=localhost", "root", "");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo "Erro: ".$e->getMessage();
}
?>