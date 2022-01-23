<?php
date_default_timezone_set("Europe/Lisbon");

//mecanismo de armazenamento de informação do lado do cliente(browser)
//sempre q criamos um cookie deixamos uma marca no browser do cliente/visitante
$contador = 0;
if (isset($_COOKIE['cook1'])){
    echo "<p>cook1 : ".$_COOKIE['cook1']."</p>";
} else {
    setrawcookie('cook1', date('H:i:s'));//rawcookie vai mostrar valores sem 16%3A08%3A54 
}

if (isset($_COOKIE['contador'])){
    echo "<p>contador : ".$_COOKIE['contador']."</p>";
} else {
    $contador++;
    setcookie('contador', $contador);
}

echo "<p>Terminado</p>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/geral.css"/>
    <title>Cookies João Ribeiro</title>
</head>
<body>
    
</body>
</html>