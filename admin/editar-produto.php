<?php include('header.php'); 

$id_cliente = $_GET['id_cliente'];
$cliente = selecionarCliente($conexao, $id_cliente);

 ?>
<!-- sidebar-wrapper  -->
  <main class="page-content">
  	<section id="conteudo">
      <div class="container-fluid">
        <h3 id="titulo-conteudo">Editar <?php echo $cliente['nome']; ?></h3>
        <hr id="divisoria-escura">
                <form action="alterar-cliente.php" method="POST" id="formulario-reg-log">
          <div class="form-group">
            <label for="nome" id="label-pequeno-painel">Nome</label>
            <input type="text" class="form-control" id="input-black-painel" name="nome" placeholder="Nome do cliente" required value="<?php echo $cliente['nome']; ?>">
          </div>
          <div class="form-group">
            <label for="email" id="label-pequeno-painel">E-mail</label>
            <input type="email" class="form-control" id="input-black-painel" name="email" placeholder="email@exemplo.com" value="<?php echo $cliente['email']; ?>">
          </div>
          <div class="form-group">
            <label for="senha" id="label-pequeno-painel">Telefone</label>
            <input type="text" class="form-control telefone" id="input-black-painel" name="telefone" placeholder="Telefone do cliente" value="<?php echo $cliente['telefone']; ?>">
          </div>
          <div class="form-group">
            <label id="label-pequeno-painel">Data de Nascimento</label>
            <input type="date" class="form-control" id="input-black-painel" name="nascimento" placeholder="<?php echo $cliente['nascimento']; ?>" value="<?php echo $cliente['nascimento']; ?>">
          </div>
          <div class="form-group">
            <label for="senha" id="label-pequeno-painel">Endereço</label>
            <textarea name="endereco" id="input-black-painel" rows="5" class="form-control"><?php echo $cliente['endereco']; ?></textarea>            
          </div>
          <div class="form-group">
            <label for="senha" id="label-pequeno-painel">CPF</label>
            <input type="text" class="form-control cpf" id="input-black-painel" name="cpf" placeholder="111.111.111-11" value="<?php echo $cliente['cpf']; ?>">
          </div>
          <div class="form-group">
            <label for="senha" id="label-pequeno-painel">facebook</label>
            <input type="url" class="form-control" id="input-black-painel" name="facebook" placeholder="Link do facebook do cliente" value="<?php echo $cliente['facebook']; ?>">
          </div>
          <div class="form-group">
            <label for="senha" id="label-pequeno-painel">Instagram</label>
            <input type="url" class="form-control" id="input-black-painel" name="instagram" placeholder="Link do instagram do cliente" value="<?php echo $cliente['instagram']; ?>">
          </div>
          <div class="form-group">
            <label for="senha" id="label-pequeno-painel">Twitter</label>
            <input type="url" class="form-control" id="input-black-painel" name="twitter" placeholder="Link do twitter do cliente" value="<?php echo $cliente['twitter']; ?>">
          </div>
          <input type="text" name="id" value="<?php echo $cliente['id']; ?>" style="display: none;">
          <div class="form-group">
            <button type="submit" class="btn btn-dark" id="botao-sucesso">Editar Cliente</button>
          </div>
          <div class="form-group">
            <a href="clientes.php" class="btn btn-outline-light" id="botao-sucesso">Voltar</a>
          </div>
      </form>
        <hr id="divisoria-escura">
      </div>
    </section>
    <div id="meio-copy">
      <p>Black Ink Tatoo Manager 2020</p>
    </div>
  </main>
  <!-- page-content" -->



<?php include('footer.php'); ?>