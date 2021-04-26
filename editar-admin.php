<?php 

include('header.php');

if(isset($_POST['nome'])){
	alterar($id, 'admin', 'nome', $_POST['nome'], $conexao);
}

if(isset($_POST['email'])){
	alterar($id, 'admin', 'email', $_POST['email'], $conexao);
}

if(isset($_POST['senha'])){
	if($POST['senha'] == $_POST['confirma']){
		alterar($id, 'admin', 'senha', md5($_POST['senha']), $conexao);
	} else {
		echo "<script>alert('As senhas não coincidem');window.location.href='javascript:history.back()';</script>";
	}
}

echo "<script>alert('Editado com sucesso');window.location.href='javascript:history.back()';</script>";

