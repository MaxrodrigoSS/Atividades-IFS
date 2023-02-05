<?php 
$valor = readline("Informe o valor da Tabuada: ");
$vezes = readline("Informe quantos vezes: ");
for($i=0;$i<=$vezes;$i++)
  echo $valor." X ".$i." = ".($valor*$i)."\n";

?>
