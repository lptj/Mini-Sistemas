<?php
$arquivo = $_FILES['arquivo'];

if(isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])){
	$nomedoarquivo = md5(time().rand(0,99)).'.png';
	//move_uploaded_file($arquivo['tmp_name'],'arquivos/'.$arquivo['name'] ); Arquivo enviado com o nome original
	move_uploaded_file($arquivo['tmp_name'], 'assets/images/'.$nomedoarquivo); //Arquivo enviado atribuido um nome aleatório para não duplicar

	echo "Arquivo enviado com sucesso!";
}
?>