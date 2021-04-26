<?php 
	include('header.php'); 

	include('navbar.php');
	$banners = SelecionarBanners($conexao);
	$cidades = selecionarTodasCidades($conexao);
	$pesquisas = selecionarTodasPesquisa($conexao);
?>

<section id="principal">
	<div id="owl-demo" class="owl-carousel owl-theme">
 		<?php foreach ($banners as $key) {?>
	  		<div class="item"><a href="<?php echo $key['link']; ?>" target="_blank"><img src="admin/<?php echo $key['foto']; ?>" alt="Banner"></a></div>
	 	<?php } ?>
	</div>

	<div class="container">
		<h2 style="margin: 20px;text-align: center;">Indices das pesquisas</h2>
		<div id="owl-cidades" class="owl-carousel owl-theme">
 		<?php foreach ($cidades as $key) {?>
		  	<div class="item">
		  		<div id="card-cidade" style="background: url('admin/<?php echo $key['foto']; ?>');">
			        <a href="cidade.php?id=<?php echo $key['id']; ?>">
			          <span id="nome-cidade-card-menor"><?php echo $key['nome']; ?></span>
			        </a>
			    </div>
		  	</div>
		 <?php } ?>
		</div>

		<div id="owl-pesquisa" class="owl-carousel owl-theme">
 			<?php foreach ($pesquisas as $key) {?>
		  		<div class="item">
		  			<img src="<?php echo 'admin/'.$key['foto']; ?>" alt="Pesquisa">
		  		</div>
		 	<?php } ?>
		</div>
	</div>
</section>

<?php include('rodape.php'); ?>

<?php include('footer.php'); ?>