<?php

printf ("Olá Mundo!");

//php aula26Prints.php

printf ("\n\tOlá Sr. %s o seu apelido é %s tem %d anos", 'Hugo', 'Resende', 33);

$valor = 65;
//https://commons.wikimedia.org/wiki/File:ASCII-Table-wide.svg
printf ("\n BINÁRIO:%b INTEIRO:%d CHAR:%c", $valor, $valor, $valor);

$a = 100;
$b = 999;
//sprinf entre pelicas '' %num do argumento, $output // posso usar os argumentos mais do que uma vez
echo sprintf (' aqui b %2$d e aqui a %1$d outra vez b em binário %2$b ', $a, $b);
//capacidade : -------999
echo sprintf ("capacidade : %'-10d", $b);
//Dentro 999 está 00000100 valores
echo sprintf ('Dentro %2$d está %1$08d valores', $a,$b);