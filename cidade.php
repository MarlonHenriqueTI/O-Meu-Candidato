<?php 
	include('header.php'); 

	include('navbar.php');

	$id_cidade = $_GET['id'];
	$cidade = selecionarCidade($conexao, $id_cidade);
	$politicos = selecionarPoliticosCidade($conexao, $id_cidade);
	$pesquisas = selecionarPesquisasCidade($conexao, $id_cidade);
?>

<section id="cidade">

	<img src="admin/<?php echo $cidade['banner']; ?>" alt="banner da cidade" id="banner-cidade">

	<div class="container">
		<h2 style="margin: 20px;text-align: center;">Políticos em destaque</h2>
		<div id="owl-politicos" class="owl-carousel owl-theme">
          <?php foreach ($politicos as $key) { ?>
		  	<div class="item">
		  		<a href="politico.php?id=<?php echo $key['id']; ?>">
		  			<img src="admin/<?php echo $key['foto']; ?> " alt="foto politico em destaque">
		  		</a>
		  	</div>
		 <?php } ?>
		</div>
		<h2 style="margin: 20px;text-align: center;">Pesquisas da cidade</h2>
		<div id="owl-pesquisa" class="owl-carousel owl-theme">
 			<?php foreach ($pesquisas as $key) { ?>
		  		<div class="item">
		  			<img src="admin/<?php echo $key['foto']; ?>" alt="The Last of us">
		  		</div>
		 	<?php } ?>
		</div>
	</div>
</section>

<?php include('rodape.php'); ?>

<?php include('footer.php'); ?>