<?php include('header.php'); 

$id_pesquisa = $_GET['id'];
$pesquisa = selecionarPesquisa($conexao, $id_pesquisa);
 ?>
<!-- sidebar-wrapper  -->
  <main class="page-content">
    <section id="conteudo">
      <div class="container-fluid">
        <h3 id="titulo-conteudo"><?php echo $pesquisa['nome']; ?></h3>
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
          <h3 style="color: #ffffff; text-align: center;">Data da pesquisa</h3>
          <h3 style="color: #ffffff; text-align: center;"><?php echo date('d/m/Y',strtotime($pesquisa['data'])); ?></h3>
          <h3 style="color: #ffffff; text-align: center;">Foto da pesquisa</h3>
          <a href="#"><img src="<?php echo $pesquisa['foto']; ?>" alt="" class="img-fluid"></a>
        <hr id="divisoria-escura">
      </div>
    </section>
    <div id="meio-copy">
      <p>O meu candidato <?php echo date('Y'); ?></p>
    </div>
  </main>
  <!-- page-content" -->

<?php include('footer.php'); ?>