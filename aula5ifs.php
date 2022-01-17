<?php 

    $apresentar = true;
    //$apresentar = false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/geral.css"/>
    <title>If</title>
</head>
<body>

<?php
    if ($apresentar){
        echo '<p class="texto3">Este parágrafo é apresentado!</p>';
    } else {
        echo '<p class="texto3">Não existe </p>';
    }
?>

<?php if ($apresentar) :?>
    <p class="texto3">Este parágrafo é apresentado!</p>
<?php else : ?>
    <p class="texto3">Não existe </p>
<?php endif; ?>


</body>
</html>