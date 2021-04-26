<?php include('header.php'); 

$id_politico = $_GET['id'];
$politico = selecionarPolitico($conexao, $id_politico);
$cidade_escolhida = selecionarCidade($conexao, $politico['id_cidade']);
$leis = selecionarLeis($conexao, $politico['id']);
$metas = selecionarMetas($conexao, $politico['id']);
$slide = selecionarSlideCandidato($conexao, $politico['id']);
$videos = selecionarVideos($conexao, $politico['id']);
 ?>
<!-- sidebar-wrapper  -->
  <main class="page-content">
    <section id="conteudo">
      <div class="container-fluid">
        <h3 id="titulo-conteudo"><?php echo $politico['nome']; ?></h3>
        <h3 id="titulo-conteudo"><?php echo "Cidade: ".$cidade_escolhida['nome']; ?></h3>
        <hr id="divisoria-escura">
        <div class="row" id="sessao-botao-cadastro">
          <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#cadastrarLei" id="botao-sucesso">
              Cadastrar Arquivo De Lei
            </button>
          </div>
          <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastrarVideo" id="botao-sucesso">
              Cadastrar Video
            </button>
          </div>
          <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#cadastrarMeta" id="botao-sucesso">
              Cadastrar Meta
            </button>
          </div>
          <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cadastrarFoto" id="botao-sucesso">
              Cadastrar Foto Do Slider
            </button>
          </div>
        </div>
        <hr id="divisoria-escura">
        <div class="row">
          <div class="col-md-4">
            <h3 style="color: #ffffff;">Foto de perfil</h3>
            <img src="<?php echo $politico['foto']; ?>" alt="<?php echo $politico['nome'].' imagem'; ?>" class="img-fluid">
          </div>
          <div class="col">
            <h3 style="color: #ffffff;">Texto Principal</h3>
            <span style="color: #fff;"><?php echo $politico['texto_principal']; ?></span>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h3 style="color: #ffffff;">Texto Dois</h3>
            <span style="color: #fff;"><?php echo $politico['texto_dois']; ?></span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <h3 style="color: #ffffff;">Foto dois</h3>
            <img src="<?php echo $politico['foto_dois']; ?>" alt="<?php echo $politico['nome'].' imagem'; ?>" class="img-fluid">
          </div>
          <div class="col">
              <h3 style="color: #ffffff;">Frase Destaque</h3>
              <h4 style="color: #ffffff;"><?php echo $politico['frase_destaque']; ?></h4>
          </div>
        </div>
        
        <hr id="divisoria-escura">
        <div class="row">
          <?php if(empty($leis)){ ?>
            <div class="container">>
              <h5 id="item-single">Nenhum arquivo de lei cadastrado</h5>
            </div>
          <?php } else { ?>
            <?php foreach ($leis as $key) {?>
            <div class="col-sm-3 col-md-4 col">
              <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="<?php echo $key['foto']; ?>" alt="card image"></p>
                                    <h4 class="card-title"><?php echo $key['nome']; ?></h4>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" onclick="deletar(<?php echo $key['id'];?>, 'leis_candidato')" id="botao-sucesso">
                                      Excluir
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <?php } }?>
        </div>
        <hr id="divisoria-escura">
        <div class="row">
          <?php if(empty($metas)){ ?>
            <div class="container">>
              <h5 id="item-single">Nenhuma meta cadastrada</h5>
            </div>
          <?php } else { ?>
            <?php foreach ($metas as $key) {?>
            <div class="col-sm-3 col-md-4 col">
              <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="<?php echo $key['foto_meta']; ?>" alt="card image"></p>
                                    <h4 class="card-title"><?php echo $key['meta']; ?></h4>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" onclick="deletar(<?php echo $key['id'];?>, 'meta_candidato')" id="botao-sucesso">
                                      Excluir
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <?php } }?>
        </div>
        <hr id="divisoria-escura">
        <div class="row">
          <?php if(empty($slide)){ ?>
            <div class="container">>
              <h5 id="item-single">Nenhuma foto cadastrada no slider</h5>
            </div>
          <?php } else { ?>
            <?php foreach ($slide as $key) {?>
            <div class="col-sm-3 col-md-4 col">
              <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="<?php echo $key['foto']; ?>" alt="card image"></p>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" onclick="deletar(<?php echo $key['id'];?>, 'slide_candidato')" id="botao-sucesso">
                                      Excluir
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <?php } }?>
        </div>
        <hr id="divisoria-escura">
        <div class="row">
          <?php if(empty($videos)){ ?>
            <div class="container">>
              <h5 id="item-single">Nenhum video cadastrado</h5>
            </div>
          <?php } else { ?>
            <?php foreach ($videos as $key) {?>
            <div class="col-sm-3 col-md-4 col">
              <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="<?php echo $key['foto']; ?>" alt="card image"></p>
                                    <h4 class="card-title"><a href="<?php echo $key['link']; ?>" target="_blank"><?php echo $key['link']; ?></a></h4>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" onclick="deletar(<?php echo $key['id'];?>, 'video_politico')" id="botao-sucesso">
                                      Excluir
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <?php } }?>
        </div>
        <hr id="divisoria-escura">
        <div class="row">
         <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" onclick="javascript:history.back()" id="botao-sucesso">
              Voltar
            </button>
          </div>
        </div>
        <hr id="divisoria-escura">
      </div>
    </section>
    <div id="meio-copy">
      <p>O meu candidato <?php echo date('Y'); ?></p>    
    </div>
  </main>
  <!-- page-content" -->

<!-- Modal -->
<div class="modal fade" id="cadastrarFoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Fotos para <?php echo $politico['nome']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="cadastrar-slider.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Fotos do slider</label>
            <input type="file" class="form-control" name="foto" required accept="image/*">
          </div>
      </div>
      <input type="text" name="id_politico" value="<?php echo $politico['id']; ?>" style="display: none;">
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"  id="botao-sucesso">Fechar</button>
        <button type="submit" class="btn btn-dark" id="botao-sucesso">Adicionar Fotos</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cadastrarLei" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Arquivo de Lei para <?php echo $politico['nome']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="cadastrar-lei.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Nome do arquivo de lei</label>
            <input type="text" class="form-control" name="nome" required>
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Fotos para o site</label>
            <input type="file" class="form-control" name="foto" required accept="image/*">
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Arquivo de lei</label>
            <input type="file" class="form-control" name="arquivo" required multiple>
          </div>
      </div>
      <input type="text" name="id_politico" value="<?php echo $politico['id']; ?>" style="display: none;">
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"  id="botao-sucesso">Fechar</button>
        <button type="submit" class="btn btn-dark" id="botao-sucesso">Adicionar Arquivo de Lei</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cadastrarMeta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Meta para <?php echo $politico['nome']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="cadastrar-meta.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Meta</label>
            <input type="text" class="form-control" name="meta" required>
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Foto para o site</label>
            <input type="file" class="form-control" name="foto_meta" required accept="image/*">
          </div>
      </div>
      <input type="text" name="id_politico" value="<?php echo $politico['id']; ?>" style="display: none;">
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"  id="botao-sucesso">Fechar</button>
        <button type="submit" class="btn btn-dark" id="botao-sucesso">Adicionar Meta</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar video para <?php echo $politico['nome']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6 class="text-center">Você pode cadastrar videos por url do youtube</h6>
        <form action="cadastrar-video.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">URL do Youtube</label>
            <input type="url" class="form-control" name="link" placeholder="https://youtube.com" id="input-black-painel" required>
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Foto para o site</label>
            <input type="file" class="form-control" name="foto" required accept="image/*">
          </div>
      </div>
      <input type="text" name="id_politico" value="<?php echo $politico['id']; ?>" style="display: none;">
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"  id="botao-sucesso">Fechar</button>
        <button type="submit" class="btn btn-dark" id="botao-sucesso">Adicionar Video</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>