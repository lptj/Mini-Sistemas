<?php
require "config.php";
?>
<a href="adicionar.php">Adicionar Novo Usu�rio</a>
<table class="tabela">
	<tr>
		<th>Nome</th>
		<th>E-mail</th>
		<th>A��o</th>
	</tr>
	<?php
	$sql = "SELECT * FROM usuarios";
	$sql = $pdo->query($sql);

	if($sql->rowcount() > 0){
		foreach($sql->fetchAll() as $usuario){
			echo '<tr>';
		echo '<td>'.$usuario['nome'].'</td>';
		echo '<td>'.$usuario['email'].'</td>';
		echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
		echo '</tr>';
		}
	}	
	?>
</table>

<link type="text/css" rel="stylesheet" href="assets/css/style.css"/>
<script type="text/javascript" src="assets/js/script.js"></script>