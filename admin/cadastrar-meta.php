<?php 

include('../functions.php');

$meta = $_POST['meta'];
$id_candidato = $_POST['id_politico'];

$extensao = strtolower(substr($_FILES['foto_meta']['name'], -4)); //pega a extensao do arquivo
$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
$diretorio = "fotos/"; //define o diretorio para onde enviaremos o arquivo
if(move_uploaded_file($_FILES['foto_meta']['tmp_name'], $diretorio.$novo_nome)){
	echo "sucesso";
	$foto_meta = $diretorio.$novo_nome;
} else {
	echo "falha";
}



cadastrarMeta($conexao, $meta, $foto_meta, $id_candidato);