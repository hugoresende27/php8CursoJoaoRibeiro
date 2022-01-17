<?php
    $nome = "Hugo Resende";
    $idade = 33;
    //print aceita apenas 1 argumento
    //retorna sempre o valor 1
    //echo permite uma sintaxe mais curta
    //preferencialmente usar o echo

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/geral.css"/>
    <title>Aula 1 php Echos e Prints</title>
</head>
<body>
    <h1>Echos</h1>

    <?php echo $nome. " ".$idade?>
    <?php echo "$nome $idade" ?><br>
    <?php echo "<h3 class=\"texto1\">$nome $idade</h3>" ?>
    <?php echo "<h3 class='texto1'>$nome $idade</h3>" ?>
    <?= "NOME:: $nome IDADE:: $idade" ?>
    <p class="texto2"><?= "NOME:: $nome IDADE:: $idade" ?></p>
    <?= "<p class='texto1'>", "$nome $idade", "</p>" ?>
    <h1 class="texto2"><?= substr($nome,0,5)?></h1>

    <h1>Prints</h1>
    <?php

        print "$nome $idade <br>";
        if (print($nome)){
            print($idade);
        }
        print "<br>";
        print "Tamanho:: ".strlen($nome);



?>

    
</body>
</html>