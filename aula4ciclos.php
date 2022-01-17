<?php 
    $nomes = ['hugo','emanuel','teixeira','resende'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/geral.css"/>
    <title>Ciclos</title>
</head>
<body>

<h1>APENAS PHP</h1>
<?php
for ($i = 100; $i<120;$i++){
    echo "<span class='texto1'>#$i |</span>";
}
?>

<h1> USANDO HTML E PHP </h1>
<?php for ($i = 100 ; $i<120; $i++) :?>
    <span class="texto1">#<?= $i ?> |</span>
<?php endfor; ?>


<h1> APRESENTAR LISTA DE NOMES</h1>
<h2> com ciclo foreach</h2>
<?php
    echo '<ul>';
    foreach($nomes as $n){
        echo "<li class='texto2'>$n</li>";
    }
    echo '</ul>';
?>


<ul>
    <?php foreach ($nomes as $x): ?>
        <li class="texto2"><?= $x ?></li>
    <?php endforeach; ?>
</ul>

<ul>
    <?php foreach ($nomes as $x) { ?>
        <li class="texto2"><?= $x ?></li>
    <?php }; ?>
</ul>
    
</body>
</html>