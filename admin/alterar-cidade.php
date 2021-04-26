<?php 

include('../functions.php');


$id = $_POST['id'];

if(isset($_POST['nome'])){
	$nome = $_POST['nome'];
	alterar($id, 'cidade', 'nome', $nome, $conexao);
}

if(isset($_FILES['foto'])){
	$extensao = strtolower(substr($_FILES['foto']['name'], -4)); //pega a extensao do arquivo
	$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
	$diretorio = "fotos/"; //define o diretorio para onde enviaremos o arquivo
	if(move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome)){
		echo "sucesso";
	} else {
		echo "falha";
	}
	alterar($id, 'cidade', 'foto', $diretorio.$novo_nome, $conexao);
}

if(isset($_FILES['banner'])){
	$extensao = strtolower(substr($_FILES['banner']['name'], -4)); //pega a extensao do arquivo
	$novo_nome = md5(date('d-m-Yi:s')) . $extensao; //define o nome do arquivo
	$diretorio = "fotos/"; //define o diretorio para onde enviaremos o arquivo
	if(move_uploaded_file($_FILES['banner']['tmp_name'], $diretorio.$novo_nome)){
		echo "sucesso";
	} else {
		echo "falha";
	}
	alterar($id, 'cidade', 'banner', $diretorio.$novo_nome, $conexao);
}


echo "<script>alert('Cidade editada com sucesso');window.location.href='javascript:history.back()';</script>";

