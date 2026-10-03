<?php
$num01 = (int)$_POST['num01'];
$num02 = (int)$_POST['num02'];
$soma = $num01 + $num02;

print "A soma de " . $num01 . " + " . $num02 . " é igual a " . $soma;

echo "<br><br>Debug primeira variavel<br>";
var_dump($num01);
echo "<br><br>Debug segunda variavel<br>";
var_dump($num02);
echo "<br><br>Debug variavel da soma<br>";
var_dump($soma);

?>