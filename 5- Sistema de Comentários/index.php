<style>
.apagar{
	float:right;
	display:none;
}
strong:hover + .apagar{
	display:block;
}
</style>
<?php
require "config.php";
if(isset($_POST['nome']) && !empty($_POST['nome'])){
	$nome = addslashes($_POST['nome']);
	$mensagem = addslashes($_POST['mensagem']);
	$data = date("y-m-d H:i:s");

	$sql = "INSERT INTO mensagem SET data_msg = '$data', nome = '$nome', msg = '$mensagem'";
	$pdo->query($sql);

	echo "Mensagem enviada";
}
?>
<fieldset>
	<form method="POST">
		Nome:</br>
		<input type="text" name="nome"/></br></br>
		Mensagem:</br>
		<textarea name="mensagem"></textarea></br></br>
		<input type="submit" value="Enviar Mensagem"/>
	</form>
</fieldset>
</br></br>

<?php
$sql ="SELECT * FROM mensagem ORDER BY data_msg DESC";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0){
	foreach($sql->fetchAll() as $mensagem):
	?>
	<strong><?php echo $mensagem['nome']." (em: ".$mensagem['data_msg'].")"; ?></strong><div class="apagar"> Apagar Mensagem</div></br>
	<?php echo $mensagem['msg']; ?>
	<hr/>
	<?php
	endforeach;	
}else{
	echo "Não há mensagens";
}
?>