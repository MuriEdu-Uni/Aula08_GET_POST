<?php
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];

if ($cidade == "curitiba" || $cidade == "Curitiba"){
    echo "Olá " . $nome . ". Você é curitibano."; 
} else { 
    echo "Olá " . $nome . ". Você é de " . $cidade; 
}
?>