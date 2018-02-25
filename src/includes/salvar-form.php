<?php

session_start();

if(count($_POST) && $_POST['id'] != ''){
    $id = $_POST['id'];

    $_SESSION['cadastro-pessoal'][$id]['nome'] = $_POST['nome'];
    $_SESSION['cadastro-pessoal'][$id]['idade'] = $_POST['idade'];
    $_SESSION['cadastro-pessoal'][$id]['telefone'] = $_POST['telefone'];
    $_SESSION['cadastro-pessoal'][$id]['endereco'] = $_POST['endereco'];
    $_SESSION['cadastro-pessoal'][$id]['estado'] = $_POST['estado'];
    $_SESSION['cadastro-pessoal'][$id]['cidade'] = $_POST['cidade'];
}
elseif(count($_POST)){
    $_SESSION['cadastro-pessoal'][] = $_POST;
}

header('Location: ../../listar.php');

?>