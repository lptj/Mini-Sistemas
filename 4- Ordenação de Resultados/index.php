<link type="text/css" rel="stylesheet" href="assets/css/style.css"/>

<?php
require "config.php";
if(isset($_GET['ordem']) && !empty($_GET['ordem'])){
	$ordem = addslashes($_GET['ordem']);
	$sql = "SELECT * FROM usuarios ORDER BY ".$ordem;
}else{
	$ordem = '';
	$sql = "SELECT * FROM usuarios";
}
?>

		<div class="opcoes">
			<form method="GET">
				<select name="ordem" onchange="this.form.submit()">
					<option></option>
					<option value="nome" <?php echo ($ordem == 'nome')?'selected="selected"':''; ?>>Por Nome</option>
					<option value="idade" <?php echo ($ordem == 'idade')?'selected="selected"':''; ?>>Por Idade</option>
				</select>
			</form>
		</div>
	

	<div class="conteudo">
		<table width="400px" border="1px solid">
			<tr>
				<td>Nome</td>
				<td>Idade</td>
			</tr>

<?php

$sql = $pdo->query($sql);
if($sql->rowCount() > 0){
	foreach($sql->fetchAll() as $dado){
		echo "<tr>";
		echo "<td>".$dado['nome']."</td>";
		echo "<td>".$dado['idade']."</td>";
		echo "</tr>";
	}
}
?>
		</table>
	</div>