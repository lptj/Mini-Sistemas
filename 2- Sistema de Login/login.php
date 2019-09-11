<?php
require "config.php";
session_start();
if(isset($_POST['email']) && empty($_POST['email']) ==false){
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0){
	$dado = $sql->fetch();

	$_SESSION['id'] = $dado['id'];

	header("location: index.php");
}

}else{

}

?>

<form method="POST">
	E-mail:</br>
	<input type="text" name="email"/></br></br>
	Senha:</br>
	<input type="password" name="senha"/></br></br>
	<input type="submit" value="Entrar" name="entrar"/>
</form>