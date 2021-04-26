<?php include('header.php'); 

$id_cidade = $_GET['id'];
$cidade = selecionarCidade($conexao, $id_cidade);
$pesquisas = selecionarTodasPesquisas($conexao, $cidade['id']);
 ?>
<!-- sidebar-wrapper  -->
  <main class="page-content">
    <section id="conteudo">
      <div class="container-fluid">
        <h3 id="titulo-conteudo"><?php echo $cidade['nome']; ?></h3>
        <hr id="divisoria-escura">
        <div class="row" id="sessao-botao-cadastro">
          <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-toggle="modal" onclick="javascript:history.back()" id="botao-sucesso">
              Voltar
            </button>
          </div>
          <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#cadastrarFoto" id="botao-sucesso">
              Cadastrar Pesquisa Para Esta Cidade
            </button>
          </div>
        </div>
        <hr id="divisoria-escura">
          <h3 style="color: #ffffff; text-align: center;">Foto da cidade</h3>
          <a href="#"><img src="<?php echo $cidade['foto']; ?>" alt="" class="img-fluid"></a>
          <h3 style="color: #ffffff; text-align: center;">Banner da cidade</h3>
          <a href="#"><img src="<?php echo $cidade['banner']; ?>" alt="" class="img-fluid"></a>
        <hr id="divisoria-escura">
        <h3 style="color: #ffffff; text-align: center;">Pesquisas de <?php echo $cidade['nome']; ?></h3>
        <hr id="divisoria-escura">
        <div class="row">
          <?php foreach ($pesquisas as $key) {?>
            <div class="col-sm-3 col-md-4 col">
              <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="<?php echo $key['foto']; ?>" alt="card image"></p>
                                    <h4 class="card-title"><?php echo $key['nome']; ?></h4>
                                    <p><?php echo date('d/m/Y', strtotime($key['data'])); ?></p>
                                    <a href="single-pesquisa.php?id=<?php echo $key['id']; ?>" class="btn btn-dark" id="botao-sucesso" style="margin-bottom: 5px;">Ver Pesquisa</a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" onclick="deletar(<?php echo $key['id'];?>, 'pesquisas')" id="botao-sucesso">
                                      Excluir
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <?php } ?>
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
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Pesquisa para <?php echo $cidade['nome']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="cadastrar-pesquisa.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
          <div class="form-group">
            <label for="" id="label-pequeno-painel">Nome da pesquisa</label>
            <input type="text" name="nome" placeholder="de um nome a pesquisa" required class="form-control">
          </div>
          <div class="form-group">
            <label for="" id="label-pequeno-painel">Data da pesquisa</label>
            <input type="date" name="data" required class="form-control">
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Imagem da pesquisa</label>
            <input type="file" class="form-control" name="foto" required accept="image/*" required>
          </div>
      </div>
      <input type="text" name="id_cidade" value="<?php echo $cidade['id']; ?>" style="display: none;">
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"  id="botao-sucesso">Fechar</button>
        <button type="submit" class="btn btn-dark" id="botao-sucesso">Adicionar Pesquisa</button>
      </div>
      </form>
    </div>
  </div>
</div>



<?php include('footer.php'); ?>