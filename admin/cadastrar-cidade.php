<?php 

include('../functions.php');

$nome = $_POST['nome'];
$extensao = strtolower(substr($_FILES['foto']['name'], -4)); //pega a extensao do arquivo
$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
$diretorio = "fotos/"; //define o diretorio para onde enviaremos o arquivo
if(move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome)){
	echo "sucesso";
	$foto = $diretorio.$novo_nome;
} else {
	echo "falha";
}

$extensao = strtolower(substr($_FILES['banner']['name'], -4)); //pega a extensao do arquivo
$novo_nome = md5(date('d-m-Yi:s')) . $extensao; //define o nome do arquivo
$diretorio = "fotos/"; //define o diretorio para onde enviaremos o arquivo
if(move_uploaded_file($_FILES['banner']['tmp_name'], $diretorio.$novo_nome)){
	echo "sucesso";
	$banner = $diretorio.$novo_nome;
} else {
	echo "falha";
}

cadastrarCidade($conexao, $nome, $foto, $banner);