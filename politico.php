<?php 
	include('header.php'); 

	include('navbar.php');

	$id_politico = $_GET['id'];
	$politico = selecionarPolitico($conexao, $id_politico);
	$videos = selecionarVideos($conexao, $id_politico);
	$slider = selecionarSlideCandidato($conexao, $id_politico);
	$leis = selecionarLeis($conexao, $id_politico);
	$metas = selecionarMetas($conexao, $id_politico);
?>

<section id="politico">
	<div class="container-fluid">
		<h2 style="margin: 20px;text-align: center;"><?php echo $politico['nome']; ?></h2>
		<div class="row">
			<div class="col-md-4">
				<img src="admin/<?php echo $politico['foto']; ?>" alt="foto politico" class="img-fluid">
			</div>
			<div class="col">
				<p class="texto-politico"><?php echo $politico['texto_principal']; ?></p>
			</div>
		</div>
		<div class="owl-carousel owl-theme"> 
        	<?php foreach($videos as $key) {  ?>
		    	<div class="item-video" data-merge="1"><a class="owl-video" href="<?php echo $key['link']; ?>"></a></div>
			<?php } ?>
		</div> 
		<div class="row">
			<div class="col-md-6">
				<p class="texto-politico"><?php echo $politico['texto_dois']; ?></p>
			</div>
			<div class="col-md-6">
				<div id="owl-slider-politico" class="owl-carousel owl-theme">
        			<?php foreach($slider as $key) {  ?>
				  		<div class="item">
				  			<img src="admin/<?php echo $key['foto']; ?>" alt="The Last of us">
				  		</div>
				 	<?php } ?>
				</div>
			</div>
		</div>
		<h2 style="margin: 20px;text-align: center;">Confira as leis de minha autoria</h2>
		<div id="owl-leis" class="owl-carousel owl-theme">
        	<?php foreach($leis as $key) {  ?>
		  		<div class="item">
		  			<a href="admin/<?php echo $key['arquivo']; ?>" target="_blank">
			  			<img src="admin/<?php echo $key['foto']; ?>" alt="Arquivo de lei">
			  		</a>
		  		</div>
		 	<?php } ?>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="admin/<?php echo $politico['foto_dois']; ?>" alt="foto perfil" id="foto-redonda-politico">
				</div>
				<div class="col-md-8" id="form-central">
					<h2 style="margin: 20px;text-align: center;text-transform: none;"><?php echo $politico['frase_destaque']; ?></h2>
				</div>
			</div>
		</div>
		<h2 style="margin: 20px;text-align: center;">metas para a próxima gestão</h2>
		<div class="row">
			<?php foreach($metas as $key) { ?>
				<div class="col-md-3" style="padding: 0!important;">
					<a href="#" data-toggle="modal" data-target="#meta<?php echo $key['id']; ?>">
						<img src="admin/<?php echo $key['foto_meta']; ?>" alt="foto-metas" id="im-grid">
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

<?php foreach ($metas as $key) {?>
	<!-- Modal -->
<div class="modal fade" id="meta<?php echo $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Meta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3><?php echo $key['meta']; ?></h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"  id="botao-sucesso">Fechar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php } ?>

<?php include('rodape.php'); ?>

<?php include('footer.php'); ?>