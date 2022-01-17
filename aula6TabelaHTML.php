<?php 
    $dados = [
        ['hugo','M',33,'PORTUGAL'],
        ['emanuela','F',3,'PORTUGAL'],
        ['teixeira','M',19,'ANGOLA'],
        ['resende','M',45,'BRASIL']
    ];

    //var_dump( json_encode($dados));
  

?>

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
    <h1>Tabela de dados</h1>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Sexo</th>
            <th scope="col">Idade</th>
            <th scope="col">País</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach($dados as $d)  :?>
            <tr>
            <td scope="row"><?=$d[0] ?></th>
            <td><?=$d[1] ?></td>
            <td><?=$d[2] ?></td>
            <td><?=$d[3] ?></td>
            </tr>
        <?php endforeach;?>   
        </tbody>

    </table>
    

</body>
</html>
