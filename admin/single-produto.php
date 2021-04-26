<?php include('header.php'); 

$id_produto = $_GET['id'];
$produto = selecionarProduto($conexao, $id_produto);
$fotos = selecionarFotosProduto($conexao, $id_produto);
$videos = selecionarVideosProduto($conexao, $id_produto);
 ?>
<!-- sidebar-wrapper  -->
  <main class="page-content">
    <section id="conteudo">
      <div class="container-fluid">
        <h3 id="titulo-conteudo"><?php echo $produto['nome']; ?></h3>
        <hr id="divisoria-escura">
        <div class="row" id="sessao-botao-cadastro">
          <div class="col-md-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" onclick="javascript:history.back()" id="botao-sucesso">
              Voltar
            </button>
          </div>
          <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#cadastrarFoto" id="botao-sucesso">
              Cadastrar Foto Para Este Produto
            </button>
          </div>
          <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#cadastrarVideo" id="botao-sucesso">
              Cadastrar Video Para Este Produto
            </button>
          </div>
        </div>
        <hr id="divisoria-escura">
        <div class="row">
          <?php if(empty($fotos) && empty($videos)){ ?>
            <div class="container">>
              <h5 id="item-single">Nenhuma foto ou video cadastrado pra esse produto ainda</h5>
            </div>
          <?php } else { ?>
            <?php foreach ($videos as $key) {?>
            <div class="col-sm-3 col-md-4 col">
              <p>Video aqui</p>
            </div>
          <?php } ?>
          <?php foreach ($fotos as $key) {?>
            <div class="col-sm-3 col-md-4 col">
              <img src="<?php echo $key['foto']; ?>" alt="imagens para dropshipping" class="img-fluid">
            </div>
          <?php } } ?>
        </div>
        <hr id="divisoria-escura">
      </div>
    </section>
    <div id="meio-copy">
      <p>BOXSHIP 2020</p>
    </div>
  </main>
  <!-- page-content" -->

<!-- Modal -->
<div class="modal fade" id="cadastrarFoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Fotos para <?php echo $produto['nome']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="cadastrar-foto-produto.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Fotos do produto</label>
            <input type="file" class="form-control" name="foto" required accept="image/*" multiple>
          </div>
      </div>
      <input type="text" name="id_produto" value="<?php echo $produto['id']; ?>" style="display: none;">
      <input type="text" name="id_categoria" value="<?php echo $produto['id_categoria']; ?>" style="display: none;">
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"  id="botao-sucesso">Fechar</button>
        <button type="submit" class="btn btn-dark" id="botao-sucesso">Adicionar Fotos</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cadastrarVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar video para <?php echo $produto['nome']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6 class="text-center">Você pode cadastrar videos por arquivo ou url do youtube ou vimeo</h6>
        <form action="cadastrar-video-produto.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">video do produto</label>
            <input type="file" class="form-control" name="video" accept="video/*">
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">URL do Youtube ou Vimeo</label>
            <input type="url" class="form-control" name="video_url" placeholder="https://youtube.com" id="input-black-painel" >
          </div>
      </div>
      <input type="text" name="id_produto" value="<?php echo $produto['id']; ?>" style="display: none;">
      <input type="text" name="id_categoria" value="<?php echo $produto['id_categoria']; ?>" style="display: none;">
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"  id="botao-sucesso">Fechar</button>
        <button type="submit" class="btn btn-dark" id="botao-sucesso">Adicionar Video</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>