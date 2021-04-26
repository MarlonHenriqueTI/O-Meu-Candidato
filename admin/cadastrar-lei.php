<?php 

include('../functions.php');

$nome = $_POST['nome'];
$id_candidato = $_POST['id_politico'];

$extensao = strtolower(substr($_FILES['foto']['name'], -4)); //pega a extensao do arquivo
$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
$diretorio = "fotos/"; //define o diretorio para onde enviaremos o arquivo
if(move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome)){
	echo "sucesso";
	$foto = $diretorio.$novo_nome;
} else {
	echo "falha";
}

$extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
$novo_nome = md5(date('d-m-Yi:s')) . $extensao; //define o nome do arquivo
$diretorio = "fotos/"; //define o diretorio para onde enviaremos o arquivo
if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome)){
	echo "sucesso";
	$arquivo = $diretorio.$novo_nome;
} else {
	echo "falha";
}

cadastrarLei($conexao, $nome, $foto, $arquivo, $id_candidato);