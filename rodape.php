<?php $site = SelecionarDadosSite($conexao); ?>

<section id="rodape">
	<h2 style="margin: 20px;text-align: center;">Dicas para votação segura</h2>
	<div class="estrelas">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4 text-center">
					<div class="row">
						<div class="col-12">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  			<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
							</svg>
						</div>
						<div class="col-12">
							<p id="texto-estrelas"><?php echo $site['dica_um']; ?></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 text-center">
					<div class="row">
						<div class="col-12">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  			<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
							</svg>
						</div>
						<div class="col-12">
							<p id="texto-estrelas"><?php echo $site['dica_dois']; ?></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 text-center">
					<div class="row">
						<div class="col-12">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  			<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
							</svg>
						</div>
						<div class="col-12">
							<p id="texto-estrelas"><?php echo $site['dica_tres']; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="duvidas">
		<h2 style="margin: 40px;text-align: center;">Dúvidas?</h2>
		<div class="formulario">
			<div class="container">
				<div class="row">
					<div class="col-md-6" id="formulario-dentro">
						<form action="#" name="f1">
							<div class="form-group">
								<input type="text" class="form-control" name="nome" placeholder="Nome" required>
							</div>
							<div class="form-group">
								<input type="mail" class="form-control" name="email" id="campoemail" placeholder="E-mail" required onblur="validacaoEmail()">
							</div>
                            <div class="form-group">
                            	<textarea name="mensagem" rows="10" class="form-control" required placeholder="Escreva sua mensagem..."></textarea>
                            </div>
                            <button id="botao-enviar" class="btn btn-success">Enviar</button>
						</form>
					</div>
					<div class="col-md-6 text-center" id="form-central">
						<div class="centralizar">
							<h3>Entre em contato</h3>
							<h4>CEL: <?php echo $site['celular']; ?></h4>
							<h4>E-MAIL: <?php echo $site['email']; ?></h4>
						</div>						
					</div>
				</div>
			</div> 
		</div>
	</div>

	<footer class="text-center">
		<p>copyright © <?php echo date('Y'); ?> O meu candidato <a href="https://marlonhenrique.com" target="_blank" style="display: none;">Marlon Henrique - Soluções em TI</a></p>
	</footer>
</section>