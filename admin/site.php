<?php include('header.php'); 

$site = SelecionarDadosSite($conexao);
$banners = SelecionarBanners($conexao);
 ?>
<!-- sidebar-wrapper  -->
  <main class="page-content">
    <section id="conteudo">
      <div class="container-fluid">
        <h3 id="titulo-conteudo">Edite os detalhes do seu site</h3>
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
              Cadastrar Banner
            </button>
          </div>
        </div>
        <hr id="divisoria-escura">
        <div class="row" style="color: #fff;">
            <div class="col-md-9">
              <h5>Celular: <?php echo $site['celular']; ?></h5>
            </div>   
            <div class="col-md-3">
              <button type="button" class="btn btn-light" data-toggle="modal" data-target="#celular" id="botao-sucesso">
              Alterar Celular
              </button>
            </div>  
            </div>
        <hr id="divisoria-escura">

        <div class="row" style="color: #fff;">

             <div class="col-md-9">
              <h5>E-mail: <?php echo $site['email']; ?></h5>
            </div>   
            <div class="col-md-3">
              <button type="button" class="btn btn-light" data-toggle="modal" data-target="#email" id="botao-sucesso">
              Alterar E-mail
              </button>
            </div> 
            </div>
        <hr id="divisoria-escura">

        <div class="row" style="color: #fff;">

             <div class="col-md-9">
              <span style="color: #fff;">Dica Um: <?php echo $site['dica_um']; ?></span>
            </div>   
            <div class="col-md-3">
              <button type="button" class="btn btn-light" data-toggle="modal" data-target="#dica_um" id="botao-sucesso">
              Alterar Dica
              </button>
            </div> 
          </div>
        <hr id="divisoria-escura">

        <div class="row" style="color: #fff;">

            <div class="col-md-9">
              <span style="color: #fff;">Dica Dois: <?php echo $site['dica_dois']; ?></span>
            </div>   
            <div class="col-md-3">
              <button type="button" class="btn btn-light" data-toggle="modal" data-target="#dica_dois" id="botao-sucesso">
              Alterar Dica
              </button>
            </div> 
          </div>
        <hr id="divisoria-escura">

        <div class="row" style="color: #fff;">

            <div class="col-md-9">
              <span style="color: #fff;">Dica Três: <?php echo $site['dica_tres']; ?></span>
            </div>   
            <div class="col-md-3">
              <button type="button" class="btn btn-light" data-toggle="modal" data-target="#dica_tres" id="botao-sucesso">
              Alterar Dica
              </button>
            </div>    
        </div>
          
        <hr id="divisoria-escura">
        <h3 style="color: #ffffff; text-align: center;">Banners</h3>
        <hr id="divisoria-escura">
        <div class="row">
          <?php foreach ($banners as $key) {?>
            <div class="col-sm-3 col-md-4 col">
              <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="<?php echo $key['foto']; ?>" alt="card image"></p>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" onclick="deletar(<?php echo $key['id'];?>, 'banner_site')" id="botao-sucesso">
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
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="cadastrar-banner.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
          <div class="form-group">
            <label for="" id="label-pequeno-painel">Link</label>
            <input type="url" name="link" placeholder="Para onde o banner deve redirecionar?" class="form-control">
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Banner</label>
            <input type="file" class="form-control" name="foto" required accept="image/*" required>
          </div>
      </div>
      <input type="text" name="id_cidade" value="<?php echo $cidade['id']; ?>" style="display: none;">
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"  id="botao-sucesso">Fechar</button>
        <button type="submit" class="btn btn-dark" id="botao-sucesso">Adicionar Banner</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="celular" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar Celular</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="alterar.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
          <div class="form-group">
            <label for="" id="label-pequeno-painel">Celular</label>
            <input type="text" name="celular" placeholder="(99) 9 9999-9999" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"  id="botao-sucesso">Fechar</button>
        <button type="submit" class="btn btn-dark" id="botao-sucesso">Alterar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="email" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar E-mail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="alterar.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
          <div class="form-group">
            <label for="" id="label-pequeno-painel">E-mail</label>
            <input type="mail" name="email" placeholder="EEE@EEE.COM" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"  id="botao-sucesso">Fechar</button>
        <button type="submit" class="btn btn-dark" id="botao-sucesso">Alterar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="dica_um" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar Dica</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="alterar.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
          <div class="form-group">
            <label for="" id="label-pequeno-painel">Dica</label>
            <input type="text" name="dica_um" placeholder="Digite a dica" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"  id="botao-sucesso">Fechar</button>
        <button type="submit" class="btn btn-dark" id="botao-sucesso">Alterar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="dica_dois" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar Dica</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="alterar.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
          <div class="form-group">
            <label for="" id="label-pequeno-painel">Dica</label>
            <input type="text" name="dica_dois" placeholder="Digite a dica" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"  id="botao-sucesso">Fechar</button>
        <button type="submit" class="btn btn-dark" id="botao-sucesso">Alterar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="dica_tres" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar Dica</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="alterar.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
          <div class="form-group">
            <label for="" id="label-pequeno-painel">Dica</label>
            <input type="text" name="dica_tres" placeholder="Digite a dica" class="form-control">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"  id="botao-sucesso">Fechar</button>
        <button type="submit" class="btn btn-dark" id="botao-sucesso">Alterar</button>
      </div>
      </form>
    </div>
  </div>
</div>


<?php include('footer.php'); ?>