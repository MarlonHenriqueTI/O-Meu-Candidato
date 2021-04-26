<?php include('header.php'); 

$cidades = selecionarTodasCidades($conexao);
?>

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline" id="formulario-pesquisa-politico">
      <h3>PESQUISAR POLÍTICO </h3>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Pesquise seu politico aqui..." aria-label="Pesquise seu politico aqui..." aria-describedby="button-addon2" name="pesquisa">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button" id="button-addon2">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
              <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
            </svg>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>

<section id="principal">
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <img src="img/logo.png" alt="logo" class="img-fluid" id="logo">
      </div>
    </div>
    <p class="text-center">Bem vindo ao site O Meu Candidato!</p>
    <a href="principal.php" class="btn btn-primary btn-lg" id="botao-principal">Entrar no site</a>
    <h2 style="margin-top: 50px;">Ir para cidades</h2>
    <div class="row">
      <?php foreach ($cidades as $key) {?>
      <div class="col-md-6" id="card-cidade" style="background: url('admin/<?php echo $key['foto']; ?> ');">
        <a href="cidade.php?id=<?php echo $key['id']; ?>">
          <span id="nome-cidade-card"><?php echo $key['nome']; ?></span>
        </a>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>