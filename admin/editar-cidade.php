<?php include('header.php'); 

$id_cidade = $_GET['id'];
$cidade = selecionarCidade($conexao, $id_cidade);
 ?>
<!-- sidebar-wrapper  -->
  <main class="page-content">
    <section id="conteudo">
      <div class="container-fluid">
        <h3 id="titulo-conteudo"><?php echo "Editar ".$cidade['nome']; ?></h3>
        <hr id="divisoria-escura">
        <div class="row" id="sessao-botao-cadastro">
          <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" onclick="javascript:history.back()" id="botao-sucesso">
              Voltar
            </button>
          </div>
        </div>
        <hr id="divisoria-escura">
          <form action="alterar-cidade.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nome" id="label-pequeno-painel">Nome</label>
                <input type="text" class="form-control" id="input-black-painel" name="nome" placeholder="Nome do produto" required value="<?php echo $cidade['nome']; ?>">
              </div>
              <div class="form-group">
                <label for="nome" id="label-pequeno-painel">Foto da cidade</label>
                <input type="file" class="form-control" name="foto" required accept="image/*" value="<?php echo $cidade['foto']; ?>">
              </div>
              <div class="form-group">
                <label for="nome" id="label-pequeno-painel">Banner da cidade</label>
                <input type="file" class="form-control" name="banner" required accept="image/*" value="<?php echo $cidade['banner']; ?>">
              </div>
              <input type="text" name="id" value="<?php echo $cidade['id']; ?>" style="display: none;">
            <button type="submit" class="btn btn-dark" id="botao-sucesso">Alterar Cidade</button>
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