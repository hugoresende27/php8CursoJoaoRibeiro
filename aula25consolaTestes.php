<?php

//argv contêm a coleção de valores dos parametros

$voltas = isset($argv[1]) ? $argv[1] : 10;

for ( $i=0; $i <= $voltas; $i++){
    echo $i.PHP_EOL;
}
// php consolaTestes.php 5      de 0 a 5
// php consolaTestes.php        de 0 a 10 por defeito

//argc que guarda o numero de parametros passados para o script php

echo $argc;

$vezes = 10;
$min =0;
$max = 100;

//verificar os argumentos
if ($argc == 2){
    $vezes = $argv[1];
}else if ($argc == 4){
    $vezes = $argv[1];
    $min = $argv[2];
    $max = $argv[3];
}

$file = fopen(time().'.txt','w');



for ($i = 0; $i < $vezes; $i++ ){
    fwrite($file, rand($min, $max) . PHP_EOL);
}
fclose($file);

//por defeito vai criar um ficheiro txt com o nome de timestamp e com 10 numeros aleatórios entre 0 e 100
//vai criar ficheiro com 50 numeros random entre 0 e 100
//php consolaTestes.php 50
//vai criar 50 aleatorios entre 1000 e 9999
//php consolaTestes.php 50 1000 9999

?>