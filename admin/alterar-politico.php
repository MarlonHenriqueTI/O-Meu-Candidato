<?php 

include('../functions.php');


$id = $_POST['id'];

if(isset($_POST['nome'])){
	$nome = $_POST['nome'];
	alterar($id, 'candidato', 'nome', $nome, $conexao);
}

if(isset($_FILES['foto'])){
	$extensao = strtolower(substr($_FILES['foto']['name'], -4)); //pega a extensao do arquivo
	$novo_nome = md5(time()) . $extensao; //define o nome do arquivo
	$diretorio = "fotos/"; //define o diretorio para onde enviaremos o arquivo
	if(move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome)){
	alterar($id, 'candidato', 'foto', $diretorio.$novo_nome, $conexao);
		echo "sucesso";
	} else {
		echo "falha";
	}
}

if(isset($_FILES['foto_dois'])){
	$extensao = strtolower(substr($_FILES['foto_dois']['name'], -4)); //pega a extensao do arquivo
	$novo_nome = md5(date('d-m-Yi:s')) . $extensao; //define o nome do arquivo
	$diretorio = "fotos/"; //define o diretorio para onde enviaremos o arquivo
	if(move_uploaded_file($_FILES['foto_dois']['tmp_name'], $diretorio.$novo_nome)){
	alterar($id, 'candidato', 'foto_dois', $diretorio.$novo_nome, $conexao);
		echo "sucesso";
	} else {
		echo "falha";
	}
}

if(isset($_POST['texto_principal'])){
	$texto_principal = $_POST['texto_principal'];
	alterar($id, 'candidato', 'texto_principal', $texto_principal, $conexao);
}

if(isset($_POST['texto_dois'])){
	$texto_dois = $_POST['texto_dois'];
	alterar($id, 'candidato', 'texto_dois', $texto_dois, $conexao);
}

if(isset($_POST['frase_destaque'])){
	$frase_destaque = $_POST['frase_destaque'];
	alterar($id, 'candidato', 'frase_destaque', $frase_destaque, $conexao);
}

if(isset($_POST['id_cidade'])){
	$id_cidade = $_POST['id_cidade'];
	alterar($id, 'candidato', 'id_cidade', $id_cidade, $conexao);
}

echo "<script>alert('Candidato editado com sucesso');window.location.href='javascript:history.back()';</script>";

