<?php

session_start();

if(isset($_GET['id']) && $_GET['id'] != ''){
    $id = $_GET['id'];
    array_splice($_SESSION['cadastro-pessoal'], $id);
}

header('Location: ../../listar.php')
?>