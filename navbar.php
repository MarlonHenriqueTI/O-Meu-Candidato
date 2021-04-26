<nav class="navbar justify-content-between">
  <a class="navbar-brand" href="principal.php">
  	<img src="img/logo.png" alt="logo" id="logo-navbar">
  </a>
  <form class="form-inline" id="formulario-pesquisa-politico-nav" action="pesquisar.php" method="POST">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Pesquise seu politico aqui..." aria-label="Pesquise seu politico aqui..." aria-describedby="button-addon2" name="pesquisa">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
              <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
            </svg>
          </button>
        </div>
      </div>
    </form>
</nav>
