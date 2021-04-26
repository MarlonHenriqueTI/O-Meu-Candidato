<?php   

include('banco_de_dados/conecta-db.php');

/*Funções de Seleção*/
function selecionarAdminEmail($conexao, $email){
	$query = "SELECT * FROM `admin` WHERE `email` = '$email'";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("admin não encontrado");</script>';
	} else {
		foreach ($resultado as $key) {
			$res[] = $key;
		}
		return $res[0];
	}
}

function selecionarAdmin($conexao, $id){
	$query = "SELECT * FROM `admin` WHERE `id` = '$id'";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("admin não encontrado");</script>';
	} else {
		foreach ($resultado as $key) { 
			$res[] = $key;
		}
		return $res[0];
	}
}

function selecionarCidade($conexao, $id){
	$query = "SELECT * FROM `cidade` WHERE `id` = '$id'";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Cidade não encontrada");</script>';
	} else {
		foreach ($resultado as $key) { 
			$res[] = $key;
		}
		return $res[0];
	}
}

function selecionarLeis($conexao, $id){
	$query = "SELECT * FROM `leis_candidato` WHERE `id_candidato` = '$id'";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Lei não encontrada");</script>';
	} else {
		foreach ($resultado as $key) { 
			$res[] = $key;
		}
		return $res;
	}
}

function selecionarMetas($conexao, $id){
	$query = "SELECT * FROM `meta_candidato` WHERE `id_candidato` = '$id'";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Meta não encontrada");</script>';
	} else {
		foreach ($resultado as $key) { 
			$res[] = $key;
		}
		return $res;
	}
}

function selecionarSlideCandidato($conexao, $id){
	$query = "SELECT * FROM `slide_candidato` WHERE `id_candidato` = '$id'";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Slider não encontrada");</script>';
	} else {
		foreach ($resultado as $key) { 
			$res[] = $key;
		}
		return $res;
	}
}

function selecionarVideos($conexao, $id){
	$query = "SELECT * FROM `video_politico` WHERE `id_politico` = '$id'";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Video não encontrada");</script>';
	} else {
		foreach ($resultado as $key) { 
			$res[] = $key;
		}
		return $res;
	}
}

function selecionarPolitico($conexao, $id){
	$query = "SELECT * FROM `candidato` WHERE `id` = '$id'";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Candidato não encontrada");</script>';
	} else {
		foreach ($resultado as $key) { 
			$res[] = $key;
		}
		return $res[0];
	}
}

function selecionarPoliticosCidade($conexao, $id){
	$query = "SELECT * FROM `candidato` WHERE `id_cidade` = '$id'";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Candidato não encontrada");</script>';
	} else {
		foreach ($resultado as $key) { 
			$res[] = $key;
		}
		return $res;
	}
}

function selecionarPesquisa($conexao, $id){
	$query = "SELECT * FROM `pesquisas` WHERE `id` = '$id'";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Pesquisa não encontrada");</script>';
	} else {
		foreach ($resultado as $key) { 
			$res[] = $key;
		}
		return $res[0];
	}
}

function selecionarPesquisasCidade($conexao, $id){
	$query = "SELECT * FROM `pesquisas` WHERE `id_cidade` = '$id'";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Pesquisa não encontrada");</script>';
	} else {
		foreach ($resultado as $key) { 
			$res[] = $key;
		}
		return $res;
	}
}

function selecionarTodosAdmin($conexao){
	$query = "SELECT * FROM `admin` order by `id` desc";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Nenhum admin encontrado...");</script>';
	} else {
		foreach ($resultado as $key) {
			$res[] = $key;
		}
		return $res;
	}
}

function selecionarTodosCandidatos($conexao){
	$query = "SELECT * FROM `candidato` order by `id` desc";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Nenhum candidato encontrado...");</script>';
	} else {
		foreach ($resultado as $key) {
			$res[] = $key;
		}
		return $res;
	}
}

function selecionarTodasCidades($conexao){
	$query = "SELECT * FROM `cidade` order by `id` desc";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Nenhuma cidade encontrada...");</script>';
	} else {
		foreach ($resultado as $key) {
			$res[] = $key;
		}
		return $res;
	}
}

function SelecionarBanners($conexao){
	$query = "SELECT * FROM `banner_site` order by `id` desc";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Nenhum banner encontrado...");</script>';
	} else {
		foreach ($resultado as $key) {
			$res[] = $key;
		}
		return $res;
	}
}

function SelecionarDadosSite($conexao){
	$query = "SELECT * FROM `site` order by `id` desc";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Falha ao capturar dados do site...");</script>';
	} else {
		foreach ($resultado as $key) {
			$res[] = $key;
		}
		return $res[0];
	}
}

function selecionarTodasPesquisas($conexao, $id_cidade){
	$query = "SELECT * FROM `pesquisas` where `id_cidade` = '$id_cidade' order by `id` desc";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Nenhuma pesquisa encontrada...");</script>';
	} else {
		foreach ($resultado as $key) {
			$res[] = $key;
		}
		return $res;
	}
}

function selecionarTodasPesquisa($conexao){
	$query = "SELECT * FROM `pesquisas` order by `id` desc";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Nenhuma pesquisa encontrada...");</script>';
	} else {
		foreach ($resultado as $key) {
			$res[] = $key;
		}
		return $res;
	}
}

/*funções de exclusão*/
function deletar($id, $tabela, $conexao){
	$query = "DELETE FROM `$tabela` WHERE `$tabela`.`id` = $id";
	$resultado = mysqli_query($conexao,$query);
	if(!$resultado){
		echo "<script>alert('Erro ao deletar...');</script>";
		die();
	} else {
		echo "<script>alert('Deletado com sucesso...');window.location.href='javascript:history.back()';</script>";
	}
}

if(isset($_GET["id"]) && isset($_GET["tabela"]) && isset($_GET["deletar"])){
		deletar($_GET["id"], $_GET["tabela"], $conexao);
}

/*funções para Alterar*/
function alterar($id, $tabela, $campo, $valor, $conexao){
	$query = "UPDATE `$tabela` SET `$campo` = '$valor' WHERE `$tabela`.`id` = $id";
	$resultado = mysqli_query($conexao,$query);
	if(!$resultado){
		echo "<script>alert('Erro ao alterar...');</script>";
		die();
	}
}


if(isset($_GET["id"]) && isset($_GET["tabela"]) && isset($_GET["alterar"]) && isset($_GET["campo"]) && isset($_GET["valor"])){
	alterar($_GET["id"], $_GET["tabela"],$_GET["campo"],$_GET["valor"], $conexao);
}

/*funções para cadastro*/

function cadastrarAdmin($conexao, $nome, $email, $senha){
	$senha = md5($senha);
	$query = "INSERT INTO `admin`( `nome`, `email`, `senha`) VALUES ('$nome', '$email', '$senha')";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Falha ao cadastrar");</script>';
	} else {
		echo "<script>alert('Cadastrado com sucesso! Bem vindo...');window.location.href='admin/index.php';</script>";
	}
}


function cadastrarCidade($conexao, $nome, $foto, $banner){
	$query = "INSERT INTO `cidade`( `nome`, `foto`, `banner`) VALUES ('$nome', '$foto', '$banner')";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Falha ao cadastrar");</script>';
	} else {
		echo "<script>alert('Cadastrado com sucesso!');window.location.href='cidades.php';</script>";
	}
}

function cadastrarPesquisa($conexao, $nome, $foto, $data, $id_cidade){
	$query = "INSERT INTO `pesquisas`( `nome`, `foto`, `data`, `id_cidade`) VALUES ('$nome', '$foto', '$data', '$id_cidade')";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Falha ao cadastrar");</script>';
	} else {
		echo "<script>alert('Cadastrado com sucesso!');</script>";
	}
}

function cadastrarLei($conexao, $nome, $foto, $arquivo, $id_candidato){
	$query = "INSERT INTO `leis_candidato`( `nome`, `foto`, `arquivo`, `id_candidato`) VALUES ('$nome', '$foto', '$arquivo', '$id_candidato')";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Falha ao cadastrar");</script>';
	} else {
		echo "<script>alert('Cadastrado com sucesso!');javascript:history.back();</script>";
	}
}

function cadastrarMeta($conexao, $meta, $foto_meta, $id_candidato){
	$query = "INSERT INTO `meta_candidato`( `meta`, `foto_meta`, `id_candidato`) VALUES ('$meta', '$foto_meta','$id_candidato')";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Falha ao cadastrar");</script>';
	} else {
		echo "<script>alert('Cadastrado com sucesso!');javascript:history.back();</script>";
	}
}

function cadastrarVideo($conexao, $link, $foto, $id_candidato){
	$query = "INSERT INTO `video_politico`( `link`, `foto`, `id_politico`) VALUES ('$link', '$foto','$id_candidato')";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Falha ao cadastrar");</script>';
	} else {
		echo "<script>alert('Cadastrado com sucesso!');javascript:history.back();</script>";
	}
}

function cadastrarFotoSlider($conexao, $foto, $id_candidato){
	$query = "INSERT INTO `slide_candidato`(`foto`, `id_candidato`) VALUES ('$foto','$id_candidato')";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Falha ao cadastrar");</script>';
	}
}

function cadastrarBanner($conexao, $foto, $link){
	$query = "INSERT INTO `banner_site`(`foto`, `link`) VALUES ('$foto','$link')";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Falha ao cadastrar");</script>';
	} else {
		echo "<script>alert('Cadastrado com sucesso!');javascript:history.back();</script>";
	}
}


function cadastrarFotoProduto($conexao, $id_produto, $id_categoria, $foto){
	$query = "INSERT INTO `foto_produto`( `id_produto`, `id_categoria`, `foto`) VALUES ('$id_produto', '$id_categoria', '$foto')";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Falha ao cadastrar");</script>';
	}
}

function cadastrarPolitico($conexao, $nome, $foto, $texto_principal, $texto_dois, $frase_destaque, $id_cidade, $foto_dois){
	$query = "INSERT INTO `candidato`( `nome`, `foto`, `texto_principal`, `texto_dois`, `frase_destaque`, `id_cidade`, `foto_dois`) VALUES ('$nome', '$foto', '$texto_principal', '$texto_dois', '$frase_destaque', '$id_cidade', '$foto_dois')";
	$resultado = mysqli_query($conexao, $query);
	if(!$resultado){
		echo '<script>alert("Falha ao cadastrar");</script>';
	} else {
		echo "<script>alert('Cadastrado com sucesso!');window.location.href='politicos.php';</script>";
	}
}