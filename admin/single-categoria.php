<?php include('header.php'); 

$id_categoria = $_GET['id'];
$categoria = selecionarCategoria($conexao, $id);

  if(isset($_POST['pesquisa'])){
    $pesquisa = $_POST['pesquisa'];
    $query = "SELECT * FROM `produto` WHERE `id_categoria` = '$id_categoria' and `nome` LIKE '%$pesquisa%' order by `id` desc";
    $resultado = mysqli_query($conexao, $query);
    if(!$resultado){
      echo '<script>alert("Nenhum produto encontrado...");</script>';
    } else {
      foreach ($resultado as $key) {
        $res[] = $key;
      }
      $produtos = $res;
    }
  } else {
    
    $produtos = selecionarTodosProdutosCategoria($conexao, $id_categoria);
  }


 ?>
<!-- sidebar-wrapper  -->
  <main class="page-content">
  	<section id="conteudo">
      <div class="container-fluid">
        <h3 id="titulo-conteudo">Todos Produtos Em <?php echo $categoria['nome']; ?></h3>
        <hr id="divisoria-escura">
        <div class="row" id="sessao-botao-cadastro">
          <div class="col">
            <form action="single-categoria.php?id=<?php echo $id_categoria; ?>" method="POST">
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <input type="text" name="pesquisa" id="input-black-painel" placeholder="Busque por produto" class="form-control">
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
          <?php if(empty($produtos)){ ?>
            <div class="container">>
              <h5 id="item-single">Nenhum produto cadastrado nessa categoria ainda, comece a cadastrar agora <a href="produtos.php">clicando aqui</a></h5>
            </div>
          <?php } else { ?>
          <?php foreach ($produtos as $key) {?>
            <div class="col-sm-3 col-md-4 col">
              <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="<?php echo $key['foto']; ?>" alt="card image"></p>
                                    <h4 class="card-title"><?php echo $key['nome']; ?></h4>
                                    <a href="single-produto.php?id=<?php echo $key['id']; ?>" class="btn btn-outline-dark" id="botao-sucesso">Ver Produto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
<div class="modal fade" id="cadastrarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastre uma nova categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="cadastrar-categoria.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Nome</label>
            <input type="text" class="form-control" id="input-black-painel" name="nome" placeholder="Nome da categoria" required>
          </div>
          
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Foto da categoria</label>
            <input type="file" class="form-control" name="foto" required accept="image/*">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"  id="botao-sucesso">Fechar</button>
        <button type="submit" class="btn btn-dark" id="botao-sucesso">Cadastrar Categoria</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>