<?php include('header.php');  ?>
<!-- sidebar-wrapper  -->
  <main class="page-content">
    <section id="conteudo">
      <div class="container-fluid">
        <h3 id="titulo-conteudo"><?php echo "Editar ".$nome; ?></h3>
        <hr id="divisoria-escura">
          <form action="editar-admin.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nome" id="label-pequeno-painel">Nome</label>
                <input type="text" class="form-control" id="input-black-painel" name="nome" value="<?php echo $nome; ?>">
              </div>
              <div class="form-group">
                <label for="nome" id="label-pequeno-painel">E-mail</label>
                <input type="mail" class="form-control" id="input-black-painel" name="email" value="<?php echo $email; ?>">
              </div>
              <div class="form-group">
                <label for="nome" id="label-pequeno-painel">Senha</label>
                <input type="password" class="form-control" id="input-black-painel" name="senha">
              </div>
              <div class="form-group">
                <label for="nome" id="label-pequeno-painel">Confirmação da senha</label>
                <input type="password" class="form-control" id="input-black-painel" name="confirma">
              </div>
            <button type="submit" class="btn btn-dark" id="botao-sucesso">Alterar Dados</button>
          </form>
        <hr id="divisoria-escura">
      </div>
    </section>
    <div id="meio-copy">
      <p>O meu candidato <?php echo date('Y'); ?></p>
    </div>
  </main>
  <!-- page-content" -->
<?php include('footer.php'); ?>