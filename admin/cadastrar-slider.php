<?php 
include('../functions.php');

$id_candidato = $_POST['id_politico'];

	$extensao = strtolower(substr($_FILES['foto']['name'], -4)); //pega a extensao do arquivo
    $op_img = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "fotos/"; //define o diretorio para onde enviaremos o arquivo
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$op_img)){
		cadastrarFotoSlider($conexao, $diretorio.$op_img, $id_candidato);
	} else {
		echo "falha a mover imagem";
	}



echo "<script>window.location.href='javascript:history.back()';</script>";