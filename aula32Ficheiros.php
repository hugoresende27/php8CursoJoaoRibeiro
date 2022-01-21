<?php

//file handler 'w' vai criar ou reescrever o ficheiro 'a' vai acrescentar
$ficheiro = fopen('dados.txt', 'a');

for ($i=0; $i<50;$i++){
    //escrever 50 valores random 
    fwrite($ficheiro,  ($i+1).' Frases RANDOMSSS'.rand(69,555).PHP_EOL);
}

//file handler aqui para ler 
$ficheiro = fopen('dados.txt', 'r');
//for ($i=0; $i<50;$i++){
//while not end of file
while(!feof($ficheiro)){
    //echo de fgets no file handler
    echo fgets($ficheiro);
}


fclose($ficheiro);


?>