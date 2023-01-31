<?php 
$idade = (int) readline("Informe a sua idade: ");
$alfabetizado = readline("Informe se é alfabetizado (A) ou analfabeto (B): ");

$voto = ($idade>=18 && $alfabetizado == 'A') ? 'Obrigatorio' : ($idade<=16 && $idade>=18 || $idade>=70 || $alfabetizado == 'B') ? 'Facultativo' : 'Não pode votar';

echo $voto;
?>
