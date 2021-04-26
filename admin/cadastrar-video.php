<?php 

include('../functions.php');

$link = $_POST['link'];
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



cadastrarVideo($conexao, $link, $foto, $id_candidato);