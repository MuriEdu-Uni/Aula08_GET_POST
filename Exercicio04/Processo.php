<?php

session_start();

$nome = $_POST['nome'];

$_SESSION['nome'] = $nome;

header("Location: boas_vindas.php");
exit;

?>