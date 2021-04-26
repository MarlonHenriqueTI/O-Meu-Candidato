<?php 
include('../functions.php');

$id_produto = $_POST['id_produto'];
$id_categoria = $_POST['id_categoria'];

for ($i = 0; $i < count($_FILES['foto']); $i++) {
	$extensao = strtolower(substr($_FILES['foto']['name'][$i], -4)); //pega a extensao do arquivo
    $op_img = md5(time()) .$i. $extensao; //define o nome do arquivo
    $diretorio = "fotos/"; //define o diretorio para onde enviaremos o arquivo
    if(move_uploaded_file($_FILES['foto']['tmp_name'][$i], $diretorio.$op_img)){
		cadastrarFotoProduto($conexao, $id_produto, $id_categoria, $diretorio.$op_img);
	} else {
		echo "falha a mover imagem";
	}

}

echo "<script>window.location.href='javascript:history.back()';</script>";