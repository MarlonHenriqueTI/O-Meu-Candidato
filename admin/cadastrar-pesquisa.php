<?php 
include('../functions.php');

$id_cidade = $_POST['id_cidade'];
$nome = $_POST['nome'];
$data = $_POST['data'];

$extensao = strtolower(substr($_FILES['foto']['name'], -4)); //pega a extensao do arquivo
$op_img = md5(time()) . $extensao; //define o nome do arquivo
$diretorio = "fotos/"; //define o diretorio para onde enviaremos o arquivo
if(move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$op_img)){
	$foto = $diretorio.$op_img;
} else {
	echo "falha a mover imagem";
}

cadastrarPesquisa($conexao, $nome, $foto, $data, $id_cidade);


echo "<script>window.location.href='javascript:history.back()';</script>";