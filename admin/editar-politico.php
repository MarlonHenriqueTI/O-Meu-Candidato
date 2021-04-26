<?php include('header.php'); 

$id_politico = $_GET['id'];
$politico = selecionarPolitico($conexao, $id_politico);
$cidades = selecionarTodasCidades($conexao);
$cidade_escolhida = selecionarCidade($conexao, $politico['id_cidade']);
 ?>
<!-- sidebar-wrapper  -->
  <main class="page-content">
    <section id="conteudo">
      <div class="container-fluid">
        <h3 id="titulo-conteudo"><?php echo "Editar ".$politico['nome']; ?></h3>
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
          <form action="alterar-politico.php" method="POST" id="formulario-reg-log" enctype="multipart/form-data">
              <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Nome</label>
            <input type="text" class="form-control" id="input-black-painel" name="nome" placeholder="Nome do candidato" required value="<?php echo $politico['nome']; ?>">
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Foto de perfil</label>
            <input type="file" class="form-control" name="foto" accept="image/*">
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Foto alternativa do candidato</label>
            <input type="file" class="form-control" name="foto_dois" accept="image/*">
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Texto Principal do candidato</label>
            <textarea name="texto_principal" rows="20" class="form-control"><?php echo $politico['texto_principal']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Segundo Texto do candidato</label>
            <textarea name="texto_dois" rows="20" class="form-control"><?php echo $politico['texto_dois']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Frase de destaque do candidato</label>
            <input type="text" class="form-control" id="input-black-painel" name="frase_destaque" placeholder="Frase do candidato" required value="<?php echo $politico['frase_destaque']; ?>">
          </div>
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Cidade</label>
            <select class="form-control" id="input-black-painel" name="id_cidade" required>
              <option value="<?php echo $politico['id_cidade']; ?>"><?php echo $cidade_escolhida['nome']; ?></option>
              <?php foreach ($cidades as $cat) {?>
                <option value="<?php echo $cat['id']; ?>"><?php echo $cat['nome']; ?></option>
              <?php  } ?>
            </select>
            <a href="cidades.php">Não encontrou a cidade? Cadastre uma nova aqui</a>
          </div>
              <input type="text" name="id" value="<?php echo $politico['id']; ?>" style="display: none;">
            <button type="submit" class="btn btn-dark" id="botao-sucesso">Alterar Candidato</button>
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