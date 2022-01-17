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

?>
</body>
</html>