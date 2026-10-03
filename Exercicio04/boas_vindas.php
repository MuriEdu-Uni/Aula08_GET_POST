<?php

session_start();

$nome = $_SESSION['nome'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Boas-vindas</title>
</head>
<body>

    <h1>Bem-vindo, <?php echo $nome; ?>!</h1>

</body>
</html>