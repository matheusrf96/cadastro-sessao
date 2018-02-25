<?php 

require_once("src/includes/header.php");
require_once("src/includes/navbar.php");

session_start();

$registro = array(
  'nome' => '',
  'idade' => '',
  'telefone' => '',
  'endereco' => '',
  'cidade' => '',
  'estado' => '',
);

if(count($_GET)){
  $id = $_GET['id'];

  $registro['nome'] = $_SESSION['cadastro-pessoal'][$id]['nome'];
  $registro['idade'] = $_SESSION['cadastro-pessoal'][$id]['idade'];
  $registro['telefone'] = $_SESSION['cadastro-pessoal'][$id]['telefone'];
  $registro['endereco'] = $_SESSION['cadastro-pessoal'][$id]['endereco'];
  $registro['cidade'] = $_SESSION['cadastro-pessoal'][$id]['cidade'];
  $registro['estado'] = $_SESSION['cadastro-pessoal'][$id]['estado'];
}
?>

<main role="main" class="container">
  <div class="starter-template">
    <form class="to-left" method="post" action="src/includes/salvar-form.php">

      <!-- valores ocultos -->
      <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
      <input type="hidden" id="estado-value" value="<?php echo $registro['estado']; ?>" />
      <input type="hidden" id="cidade-value" value="<?php echo $registro['cidade']; ?>" />

      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome"
              id="nome" placeholder="Insira o nome" value="<?php echo $registro['nome']; ?>" />
      </div>
      <div class="form-row">
        <div class="form-group col-sm-4">
          <label for="idade">Idade</label>
          <input type="number" class="form-control" name="idade"
                id="idade" placeholder="Insira a idade" value="<?php echo $registro['idade']; ?>" />
        </div>
        <div class="form-group col-sm-8">
          <label for="telefone">Telefone</label>
          <input type="text" class="form-control" name="telefone"
                id="telefone" placeholder="(11) 99999-8888" value="<?php echo $registro['telefone']; ?>" />
        </div>
      </div>
      <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" name="endereco"
              id="endereco" placeholder="Insira o endereço" value="<?php echo $registro['endereco']; ?>" />
      </div>
      <div class="form-row">
        <div class="form-group col-sm-4">
          <label for="estado">Estado</label>
          <select id="estado" name="estado" class="form-control"></select>
        </div>
        <div class="form-group col-sm-8">
          <label for="cidade">Cidade</label>
          <select id="cidade" name="cidade" class="form-control"></select>
        </div>

        <br />
        <button type="submit" class="btn btn-success">Salvar</button>
        <button type="reset" class="btn btn-warning">Limpar</button>
      </div>
    </form>
  </div>
</main>

<?php require_once("src/includes/scripts.php"); ?>