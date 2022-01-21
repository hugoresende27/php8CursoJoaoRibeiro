<?php

//file handler 'w' vai criar ou reescrever o ficheiro 'a' vai acrescentar
$ficheiro = fopen('dados.txt', 'w');

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
/////////////////////////////// 2 handlers copiar um ficheiro///////////////
$file_original = fopen("dados.txt", "r");
$file_copia = fopen("dadosCopia.txt", "w");
while(!feof($file_original)){
    
    fwrite($file_copia, fgets($file_original));
}
fclose($file_original);
fclose($file_copia);

//////////////////////////// file put contents ////////////////////////
$texto = "lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aspernatur molestiae ipsum officiis alias culpa, vel earum, itaque dolorum nulla beatae neque magnam mollitia laboriosam odio cupiditate voluptatum et unde!Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aspernatur molestiae ipsum officiis alias culpa, vel earum, itaque dolorum nulla beatae neque magnam mollitia laboriosam odio cupiditate voluptatum et unde!Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aspernatur molestiae ipsum officiis alias culpa, vel earum, itaque dolorum nulla beatae neque magnam mollitia laboriosam odio cupiditate voluptatum et unde! " ;

//file_put_contents fopen fwrite e fclose num só
file_put_contents("dadosCopia.txt",$texto);

//////////////////////////// file get contents ////////////////////////
//file_put_contents fopen fread e fclose num só
$txt = file_get_contents("dadosCopia.txt");
echo $txt;


?>