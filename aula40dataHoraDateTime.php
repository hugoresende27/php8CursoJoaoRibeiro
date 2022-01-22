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

///////////////////////////////// timezone ///////////////////////////////

//https://www.php.net/manual/en/timezones.php
$brasil = new DateTime('now', new DateTimeZone('America/Fortaleza'));
$antartica = new DateTime('now', new DateTimeZone('Antarctica/Casey'));

echo "BRASIL -- ".$brasil->format('d-m-Y H:i:s').PHP_EOL;
echo "ANTARTICA -- ".$antartica->format('d-m-Y H:i:s').PHP_EOL;

////////////////// timezone modifier ///////////////////////

$portugal = new DateTime('now', new DateTimeZone('Europe/Lisbon'));

echo "PT -- ".$portugal->format('d-m-Y H:i:s').PHP_EOL;

//$portugal->modify('+8 hours');
//$portugal->modify('+15 months');
$portugal->modify('-33 year - 6 months + 8 hours');

echo "PT -- ".$portugal->format('d-m-Y H:i:s').PHP_EOL;

$data_nascimento = new DateTime('01-01-1966');
$data_nascimento2 = new DateTime('23-01-1966');

echo calcular_idade($data_nascimento);
echo calcular_idade($data_nascimento2);

echo PHP_EOL;
calcular_idade_v2($data_nascimento);
calcular_idade_v2($data_nascimento2);


function calcular_idade_v2($data_nascimento){
    $agora = new DateTime();

    //calculo dos anos
    if ($agora->format('Y') == $data_nascimento->format('Y')){//se o ano de nascimento for igual ao ano atual
        $anos = 1;                                  //tem 1 ano 
    } else {
        $anos = $agora->format('Y') - $data_nascimento->format('Y'); //se não for igual ano atual - ano nascimento
    }

    //calculo meses
    if($agora->format('m') < $data_nascimento->format('m')){//se o mes atual for inferior ao mes de nascimento
        $anos--;                //ainda nao chegamos a 1 ano, -1 anos
        $meses = $data_nascimento->format('m') - $agora->format('m');

    } elseif($agora->format('m') == $data_nascimento->format('m')){//se estivermos no mesmo mês
        $meses = $data_nascimento->format('m') - $agora->format('m');
        if ($agora->format('d')<$data_nascimento->format('d')){ //e se o dia for menor que o dia de nascimento
            $anos--;                //menos 1 ano
            //$dias = $data_nascimento->format('d') - $agora->format('d');
        }

    } elseif($agora->format('m')>$data_nascimento->format('m')){ 
        $meses = $agora->format('m') - $data_nascimento->format('m');
   
    }    
    $dias = $agora->format('d') - $data_nascimento->format('d');
    

    echo "ANOS:: ".$anos.PHP_EOL;
    echo "MESES:: ".$meses.PHP_EOL;
    echo "DIAS:: ".abs($dias).PHP_EOL;
}


function calcular_idade($data_nascimento){
    $agora = new DateTime();

    //calculo dos anos
    if ($agora->format('Y') == $data_nascimento->format('Y')){//se o ano de nascimento for igual ao ano atual
        $anos = 1;                                  //tem 1 ano 
    } else {
        $anos = $agora->format('Y') - $data_nascimento->format('Y'); //se não for igual ano atual - ano nascimento
    }

    //calculo meses
    if($agora->format('m') < $data_nascimento->format('m')){//se o mes atual for inferior ao mes de nascimento
        $anos--;                //ainda nao chegamos a 1 ano, -1 anos

    } elseif($agora->format('m') == $data_nascimento->format('m')){//se estivermos no mesmo mês

        if ($agora->format('d')<$data_nascimento->format('d')){ //e se o dia for menor que o dia de nascimento
            $anos--;                //menos 1 ano
        }

    }
    return $anos != 1 ? "$anos anos" : " 1 ano";
}

?>