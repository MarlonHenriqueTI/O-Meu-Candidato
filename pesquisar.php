<?php   include('header.php'); 

  include('navbar.php'); 

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
  } 
 ?>
<div class="container-fluid">
  <?php if(empty($candidatos)){ ?>
    <h5 class="text-center">Nenhum candidato encontrado para a pesquisa <?php echo $_POST['pesquisa']; ?></h5>
  <?php } else { ?>

<div class="row">
  <?php foreach ($candidatos as $key) {?>
    <div class="col-sm-3 col-md-4 col">
              <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="admin/<?php echo $key['foto']; ?>" alt="card image"></p>
                                    <h4 class="card-title"><?php echo $key['nome']; ?></h4>
                                    <a href="politico.php?id=<?php echo $key['id']; ?>" class="btn btn-success" id="botao-sucesso" style="margin-bottom: 5px;">Ver Candidato</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  <?php } ?>
  <?php } ?>
</div>


<?php include('rodape.php'); ?>

<?php include('footer.php'); ?><?php include('footer.php'); ?>