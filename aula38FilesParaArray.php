<?php
                                            // flags para passar linhas vazias sem espaçamento entre os valores
$paises = file(dirname(__FILE__).'/paises.txt', FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
print_r($paises);

////////////////////// colocar array num ficheiro csv fputcsv ///////////////////////////
$dados = [
    ['Hugo', 'Programador', 33],
    ['Rita', 'Marketing', 23],
    ['Lisa', 'Design', 25],
    ['Tó', 'Mecânico', 55],
];

$f = fopen ('dados2.csv', "w");
foreach($dados as $d){
    fputcsv($f, $d);
}
fclose($f);

?>