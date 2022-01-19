<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/geral.css"/>
    <title>Substrings</title>
</head>
<body>

<?php
    $a = "esta é uma frase de testes";
    $b = substr($a, 0, 10); 
    $c = mb_substr($a, 0, 10); 
    $d = mb_substr($a,10); 
    $e = mb_substr($a,-6); 
    $f = mb_substr($a,-6,3); 

    $abc = 'abcdefghijlmnopqrstuvxwyz';
    $g = substr($abc, 8, -3);
    $h = substr($abc, 2, 10);
    $i = substr($abc, 99);// vai dar vazio


?>

<h1 class="texto1">Substrings</h1>
<p class="texto3">::::::: Original::: <?= $a?></p>
<p class="texto2">substrin 0, 10 ::::: <?= $b?></p>
<p class="texto2">mb_substrin 0, 10 :: <?= $c?></p>
<p class="texto2">mb_substrin  10 :: <?= $d?></p>
<p class="texto2">mb_substrin -6 :: <?= $e?></p>
<p class="texto2">mb_substrin -6,3 :: <?= $f?></p>

<p class="texto3">::::::: Original::: <?= $abc?></p>
<p class="texto2">mb_substrin 8,-3 :: <?= $g?></p>
<p class="texto2">mb_substrin 2,10 :: <?= $h?></p>
<p class="texto2">mb_substrin 99 :: <?= $i?></p>
    
</body>
</html>