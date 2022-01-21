<?php

echo "\nEmpresa (c) ".date('Y');             //2022
echo "\nEmpresa (c) ".date('y');             //22
echo "\nEmpresa (c) ".date('d/m/Y');         //21/01/2022
echo "\nEmpresa (c) ".date('D/m/Y');         //Fri/01/2022
echo "\nEmpresa (c) ".date('Y-m-d H:i:s');   //2022-01-21 22:21:29
echo "\nEmpresa (c) ".date('H:i:s');         //22:22:09

///////////// UNIX TIME STAMP 1 DE JANEIRO DE 1970 ÀS 00H inicio do sistema unix

echo "\n".time()."\n";      //1642803970 segundos decorridos desde 1/1/1970
echo time() + 24*60*60;     //1 dia depois  
echo PHP_EOL;
//para registar em base de dados ao micro segundo, nunca é igual
echo microtime(true);
echo PHP_EOL;


//////////////////////////// DATETIME //////////////////////////////////////////
$agora = new DateTime();//agora é estático, vai ficar sempre com a hora em que é instanciado/definido
echo $agora->format('d-m-Y H:i:s');         //21-01-2022 22:32:58
echo PHP_EOL;



?>