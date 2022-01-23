<?php

//mecanismo de armazenamento de informação do lado do cliente(browser)
//sempre q criamos um cookie deixamos uma marca no browser do cliente/visitante

if (isset($_COOKIE['cook1'])){
    echo $_COOKIE['cook1'];
} else {
    setcookie('cook1', date('H:i:s'));
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