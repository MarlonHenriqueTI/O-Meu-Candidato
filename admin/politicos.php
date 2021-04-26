<?php include('header.php'); 

  if(isset($_POST['pesquisa'])){
    $pesquisa = $_POST['pesquisa'];
    $query = "SELECT * FROM `candidato` WHERE `nome` LIKE '%$pesquisa%' order by `id` desc";
    $resultado = mysqli_query($conexao, $query);
    if(!$resultado){
      echo '<script>alert("Nenhum candidato encontrado...");</script>';
    } else {
      foreach ($resultado as $key) {
        $res[] = $key;
      }
      $candidatos = $res;
    }
  } else {
    $candidatos = selecionarTodosCandidatos($conexao);
  }

$cidades = selecionarTodasCidades($conexao);
 ?>
<!-- sidebar-wrapper  -->
  <main class="page-content">
  	<section id="conteudo">
      <div class="container-fluid">
        <h3 id="titulo-conteudo">Candidatos</h3>
        <hr id="divisoria-escura">
        <div class="row" id="sessao-botao-cadastro">
          <div class="col-md-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cadastrarProduto" id="botao-sucesso">
              Cadastrar Novo Candidato
            </button>
          </div>
          <div class="col">
            <form action="politicos.php" method="POST">
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <input type="text" name="pesquisa" id="input-black-painel" placeholder="Busque por candidato" class="form-control">
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <button type="submit" class="btn btn-outline-light" id="botao-sucesso">
                    Buscar
                  </button>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
        <hr id="divisoria-escura">
        <div class="row">
          <?php foreach ($candidatos as $key) {?>
            <div class="col-sm-3 col-md-4 col">
              <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="<?php echo $key['foto']; ?>" alt="card image"></p>
                                    <h4 class="card-title"><?php echo $key['nome']; ?></h4>
                                    <a href="single-candidato.php?id=<?php echo $key['id']; ?>" class="btn btn-dark" id="botao-sucesso" style="margin-bottom: 5px;">Ver Candidato</a>
                                    <a href="editar-politico.php?id=<?php echo $key['id']; ?>" class="btn btn-warning" id="botao-sucesso" style="margin-bottom: 5px;">
                                      Editar
                                    </a>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" onclick="deletar(<?php echo $key['id'];?>, 'candidato')" id="botao-sucesso">
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
<div class="modal fade" id="cadastrarProduto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastre uma novo candidato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="cadastrar-politico.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Nome</label>
            <input type="text" class="form-control" id="input-black-painel" name="nome" placeholder="Nome do candidato" required>
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Foto de perfil</label>
            <input type="file" class="form-control" name="foto" required accept="image/*" required>
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Foto alternativa do candidato</label>
            <input type="file" class="form-control" name="foto_dois" required accept="image/*" required>
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Texto Principal do candidato</label>
            <textarea name="texto_principal" rows="20" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Segundo Texto do candidato</label>
            <textarea name="texto_dois" rows="20" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Frase de destaque do candidato</label>
            <input type="text" class="form-control" id="input-black-painel" name="frase_destaque" placeholder="Frase do candidato" required>
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Cidade</label>
            <select class="form-control" id="input-black-painel" name="id_cidade" required>
              <option value="">Selecione uma cidade para o candidato</option>
              <?php foreach ($cidades as $cat) {?>
                <option value="<?php echo $cat['id']; ?>"><?php echo $cat['nome']; ?></option>
              <?php  } ?>
            </select>
            <a href="cidades.php">Não encontrou a cidade? Cadastre uma nova aqui</a>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"  id="botao-sucesso">Fechar</button>
        <button type="submit" class="btn btn-dark" id="botao-sucesso">Cadastrar Candidato</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>