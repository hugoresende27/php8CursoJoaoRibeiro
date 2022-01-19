<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/geral.css"/>
    <title>Explodes e Implodes</title>
</head>
<body>


<?php
    //explode = de string para array
    $str_nome = "Hugo Emanuel Teixeira Resende";
    $nome = explode(' ',$str_nome);
    $nome2 = explode(' ',$str_nome,2);

    //implode = de array para string

    //$nomes = ['hugo','emanuel','teixeira','resende'];//usei o array de explode
    $str_nome2 = implode(" | ", $nome);


?>  

    <h1>Explode</h1>
    <p>String Original <?= $str_nome ?></p>
    <?php
        echo "<pre>";
        print_r($nome);
        echo "<p>com parametro 2</p>";
        print_r($nome2);

        echo "<pre>";
    ?>

    <h1>Implode</h1>
    <p><?= $str_nome2 ?></p>
    
</body>
</html>