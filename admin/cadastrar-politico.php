<?php 

include('../functions.php');

$nome = $_POST['nome'];
$texto_principal = $_POST['texto_principal'];
$texto_dois = $_POST['texto_dois'];
$frase_destaque = $_POST['frase_destaque'];
$id_cidade = $_POST['id_cidade'];

$extensao = strtolower(substr($_FILES['foto']['name'], -4)); //pega a extensao do arquivo
$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
$diretorio = "fotos/"; //define o diretorio para onde enviaremos o arquivo
if(move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome)){
	echo "sucesso";
	$foto = $diretorio.$novo_nome;
} else {
	echo "falha";
}

$extensao = strtolower(substr($_FILES['foto_dois']['name'], -4)); //pega a extensao do arquivo
$novo_nome = md5(date('d-m-Yi:s')) . $extensao; //define o nome do arquivo
$diretorio = "fotos/"; //define o diretorio para onde enviaremos o arquivo
if(move_uploaded_file($_FILES['foto_dois']['tmp_name'], $diretorio.$novo_nome)){
	echo "sucesso";
	$foto_dois = $diretorio.$novo_nome;
} else {
	echo "falha";
}

cadastrarPolitico($conexao, $nome, $foto, $texto_principal, $texto_dois, $frase_destaque, $id_cidade, $foto_dois);