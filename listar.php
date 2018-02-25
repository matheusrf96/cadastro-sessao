<?php 

require_once("src/includes/header.php");
require_once("src/includes/navbar.php");

$pessoas = [];

if(isset($_SESSION['cadastro-pessoal'])){
  $pessoas = $_SESSION['cadastro-pessoal'];
}

?>

<main role="main" class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Idade</th>
        <th scope="col">Telefone</th>
        <th scope="col">Endereço</th>
        <th scope="col">Cidade</th>
        <th scope="col">Estado</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
<?php
      foreach($pessoas as $i => $item){
        echo "
          <tr>
            <td scope='row'>".($i + 1)."</td>
            <td>".$item['nome']."</td>
            <td>".$item['idade']."</td>
            <td>".$item['telefone']."</td>
            <td>".$item['endereco']."</td>
            <td>".$item['cidade']."</td>
            <td>".$item['estado']."</td>
            <td>
              <a class='btn btn-primary' href='cadastrar.php?id=".$i."'><i class='fas fa-edit'></i></a>
              <a class='btn btn-danger' href='src/includes/apagar-registro.php?id=".$i."'><i class='far fa-trash-alt'></i></a>
            </td>
          </tr>
        ";
      }
?>
    </tbody>
  </table>
</main>

<?php require_once("src/includes/scripts.php"); ?>
