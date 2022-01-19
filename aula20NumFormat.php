<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/geral.css"/>
    <title>Number Format</title>
</head>
<body>

<?php

    $valor = 100.45;
    echo "<p class='texto2'>".number_format($valor, 0 , null, null)."</p>";
    echo "<p class='texto2'>".number_format($valor, 2 , ',', null)."</p>";
    echo "<p class='texto2'>".number_format($valor, 3 , '-', null)."</p>";
    echo "<p class='texto2'>".number_format($valor, 1 , ',', null)."</p>";

    $valor = 123456.758;
    echo "<p class='texto1'>".number_format($valor, 2 , ',', '.')." €</p>";
    echo "<p class='texto1'>".number_format($valor, 2 , ',', ' ')." €</p>";
    echo "<p class='texto1'>".number_format($valor, 3 , ',', "'")." €</p>";
    

?> 
</body>
</html>