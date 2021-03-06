<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/geral.css"/>
    <title>String replace</title>
</head>
<body>

<?php

    $a = "Este texto serve para testar o sistema";
    $b = str_replace(' ', ' ---> ', $a);
    $c = str_replace('te', 'ZZ', $a);

    $vogais = ['a','e','i','o','u','A','E','I','O','U'];
    $d = str_replace($vogais, "", $a);//vai substituir todas as vogais por espaços vazios

    $vogais2 = ['A','E','I','O','U'];
    $e = str_ireplace($vogais, "", $a);//ireplace não é case sensitive

?>

    <h1>String replace</h1>
    <p class="texto1">original :: <?= $a ?></p>
    <p class="texto2">str_replace--->:: <?= $b ?></p>
    <p class="texto2">str_replace ZZ :: <?= $c ?></p>
    <p class="texto2">str_rep vogais :: <?= $d ?></p>
    <p class="texto2">str_irep vogais :: <?= $e ?></p>
    
<?php
    $y ="este jantar está muito bom !";
    $originais = ['jantar','bom'];
    $substituir = ['almoço','mau'];
    $z = str_replace($originais,$substituir,$y);//vai procurar originais e substituir pelo substituir em $y

    $originais2 = ['ESTE','MUITO'];
    $z2 = str_ireplace($originais2,$substituir,$y);

?>
    <p class="texto3">original :: <?= $y ?></p>
    <p class="texto3">str subs :: <?= $z ?></p>
    <p class="texto3">str i    :: <?= $z2 ?></p>


<?php

  $abc = 'abcdefghijlmnopqrstâvxwyz';
  $split1 = str_split($abc, 3);
  $split2 = str_split($abc);
  $split3 = mb_str_split($abc,7);//mb para acentos

?>

    <p class="texto2">original :: 

    <?php
        echo "<h1>split 3</h1><pre>";
        print_r($split1);
        echo "<h1>split </h1>";
        print_r($split2);
        echo "<h1>split 7</h1>";
        print_r($split3);

        echo "<pre>";
    ?>

    </p>

<?php
    //@param string $needle
    //If needle is not a string, it is converted to an integer and applied as the ordinal value of a character.
    $string_string = stristr($abc, 'de');    //retorna o resto a partir de uma ocorrência //needle 'de' tem de ser sempre string
    $string_string2 = stristr($abc, 'j',true);    //retorna o principio a partir de uma ocorrência (i case sensitive)
    echo ("<p>$string_string</p>");
    echo ("<p>$string_string2</p>");

    $pos = strpos($abc, 'lm');
    echo ("<p>$pos</p>");

    //verificação se existe ===
    if (mb_stripos($a, 'azz') === false){
        echo "<p> Não existe!</p>";
    } else {
        echo "<p> existe!</p>";
    }

    ///////////////////////////////////////
    $frase = "Este quarto TTem luz!";
    $p = stripos($frase, 'T');
    $p2 = strpos($frase, 'T');

    echo ("<p>$p</p>");
    echo ("<p>$p2</p>");


?>

    
</body>
</html>