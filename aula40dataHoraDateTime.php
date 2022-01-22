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
//$agora = new DateTime('01-01-2000 23:12:30'); //posso instanciar agora com uma data já definida

echo $agora->format('d-m-Y H:i:s');         //21-01-2022 22:32:58
echo PHP_EOL;

//setTime e setDate
$agora ->setTime(23,23);        //setTime muda a hora
$agora ->setDate(1999,3,9);
echo $agora->format('d-m-Y H:i:s');         //09-03-1999 23:23:00
echo PHP_EOL;

//add ou sub DateInterval (cálcula anos bissextos)
$agora->add(new DateInterval('P180D'));     //adiciona 180 dias
$agora->add(new DateInterval('P12W'));     //adiciona 12 semanas
$agora->add(new DateInterval('PT72H'));     //adiciona 72 horas
$agora->sub(new DateInterval('PT7H'));     //subtrai 7 horas
$agora->sub(new DateInterval('PT80H15M30S'));     //subtrai 7 horas 15 minutos e 30 segundos
echo $agora->format('d-m-Y H:i:s');         
echo PHP_EOL;

////////////////////////////////// lista com datas ////////////////////////

$datas = [
    '21-10-1988',
    '12-09-1996',
    '01-07-2001',
    '08-12-2005',
    '22-11-1995'
];

foreach($datas as $d){
    $info = DateTime::createFromFormat('d-m-Y', $d);    //instanciar cada data como um DateTime
    $info->add(new DateInterval('P180D'));              //acrescenta 180 dias a cada data
    echo $info->format('Y-m-d').PHP_EOL;
}

///////////////////////////////// diff ///////////////////////////////
$data_divida = new DateTime('10-03-1997');
$agora = new DateTime();

$intervalo = $data_divida->diff($agora);   
echo $intervalo->days; //print da diferença de dias 
echo PHP_EOL;
print_r($intervalo);


?>