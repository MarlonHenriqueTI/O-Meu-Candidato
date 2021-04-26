<?php 

include('../functions.php');


$id = 1;

if(isset($_POST['celular'])){
	$celular = $_POST['celular'];
	alterar($id, 'site', 'celular', $celular, $conexao);
}

if(isset($_POST['email'])){
	$email = $_POST['email'];
	alterar($id, 'site', 'email', $email, $conexao);
}

if(isset($_POST['dica_um'])){
	$dica_um = $_POST['dica_um'];
	alterar($id, 'site', 'dica_um', $dica_um, $conexao);
}

if(isset($_POST['dica_dois'])){
	$dica_dois = $_POST['dica_dois'];
	alterar($id, 'site', 'dica_dois', $dica_dois, $conexao);
}

if(isset($_POST['dica_tres'])){
	$dica_tres = $_POST['dica_tres'];
	alterar($id, 'site', 'dica_tres', $dica_tres, $conexao);
}

echo "<script>alert('Site editado com sucesso');window.location.href='javascript:history.back()';</script>";

