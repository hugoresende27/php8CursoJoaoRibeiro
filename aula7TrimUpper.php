<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/geral.css"/>
    <title>Tabela HTML em PHP</title>
</head>
<body>

<?php

///////////////////////////// TRIMS ///////////////////////////////////
    $a = "       ISTO É uma STRINGGGGG GGG     ";
    $b ="abcdef";
    echo "<p>TRIM NORMAL <span class='texto3'>".trim($a)."</span></p>";
    echo "<p>TRIM UMA  <span class='texto3'>".trim($a,'ISTO')."</span></p>";
    echo "<p>TRIM ABEF  <span class='texto3'>".trim($b,'abef')."</span></p>";
    echo trim($b,"af");
    echo "<p>LTRIM  <span class='texto3'>".ltrim($b)."</span></p>";
    echo "<p>RTRIM  <span class='texto3'>".rtrim($b)."</span></p>";

    $str = "Hello World!";
    echo $str . "<br>";
    echo trim($str,"Hed!");

    $nome ="Hugo Resende";
    echo trim($nome,"Hugo");

    //muito usado:
    //$usario = trim($_POST['user']); //se user tiver colocado espaços a mais 

///////////////////////////// UPPERS E LOWERS ///////////////////////////////////
    $nome1 = "hugão resende";
    echo "<p>".strtoupper($nome1);
    echo "<p>".mb_strtoupper($nome1); //mb_para as letras acentuadas tbm ficarem maiusculas
    echo "<p>".strtolower($nome1); 
    echo "<p>".mb_strtolower($nome1); 
    echo "<p>".ucfirst($nome1); 
    $nome2 ="índice";       //não funciona quando primeira letra tem acento
    echo "<p>".ucfirst($nome2); 
    
    echo "<p>".ucwords($nome1);

///////////////////////////// STRLEN ///////////////////////////////////
    $comp = strlen($a);
    echo "<h1>".$comp;
    $y = "";
    $x = null;
    $z = false;
    echo "<h1>\" \" ".strlen($y);
    echo "<h1> null ".strlen($x);
    echo "<h1> false ".strlen($z);

    $num = 1234;
    echo "<h1> num ".strlen($num);

    $acentos = "joão";
    echo "<h2> acentos:: ".strlen($acentos);    //sem mb apresenta caracteres a mais, conta os acentos
    echo "<h2> mb_acentos:: ".mb_strlen($acentos);

///////////////////////////// REPEAT ///////////////////////////////////

    $aa = str_repeat('-',20);
    $bb = str_repeat('=|',20);

    $valor = 100;

    echo "<p>".str_pad($valor, '75', '.', STR_PAD_LEFT);

    echo "<pre>";
    $valores = [1,2,3,4];
    foreach ($valores as $v){
            echo str_pad($v, '50', '------>', STR_PAD_LEFT).PHP_EOL;
    }

///////////////////////////// CONTAINS ///////////////////////////////////
?>
</body>
</html>