<?php

$nomes = ['XXXX','TTTTTT','asadasd','zacarias'];

echo count($nomes).PHP_EOL;

for ($i=0; $i < count($nomes); $i++){
    echo $nomes[$i].PHP_EOL;
}

$empresa = [
    'administracao' => [
        'Joao admin',
        'carlos socio'
    ],
    'contabilidade' =>[
        'Mariana',
        'Joaquim',
        'Antonio'
    ]
];

echo "CONT EMPRESA::".count($empresa).PHP_EOL;
//count recursive para contar tudo, ou usar valor 1, atenção também vai contabilizar as chaves
echo "CONT EMPRESA RECURSIVE::".count($empresa,COUNT_RECURSIVE).PHP_EOL;
echo "CONT EMPRESA RECURSIVE::".count($empresa,1).PHP_EOL;

/////////// verificar se é array is_array ////////////////////////

//$valor = 'Hugo';
$valor = [1,2,3];

if (is_array($valor)){
    echo 'É um array!';
}else {
    echo 'Não é array';
}

echo PHP_EOL;

/////////// verificar se está vazio empty ////////////////////////

$v = '';
//$v = null;
//$v = 69;

if (empty($v)){
    echo 'Está vazio';
}else {
    echo 'tem conteudo';
}

echo PHP_EOL;
echo (int)empty($v);    //0 quando tem conteúdo, devolve 1 quando está vazio

/////////// is_countable is_iterable ////////////////////////
$x = 66;
//$x = [];
//$x = [1,1,1];
echo PHP_EOL;
echo (int)is_countable($x);     //mesmo estando vazio [] vai devolver 1
echo PHP_EOL;                   //int 66 vai devolver 0
echo (int)is_iterable($x);


////////////////// PUSH POP SHIFT UNSHIFT ///////////////////

$nomesB = ['trex','cobra','snake','psa'];

$nomesB[] = 'Python'; //vai adicionar Python ao array
print_r($nomesB);

$nomesB[66] = 'Python'; //vai adicionar Python ao array com indice [66]
print_r($nomesB);

array_push($nomesB,'Joaquim');      //push vai adicionar no fim,
array_push($nomesB,'pedro','marcos',33,'varTemp');//posso adicionar vários valores diferentes tipos de uma vez só
print_r($nomesB);

array_unshift($nomesB,'atencao');  //atencao vai ficar depois de tiago e zecas
array_unshift($nomesB,'Tiago','Zecas');//unshift adiciona ao inicio
print_r($nomesB);

array_shift($nomesB);   //shift vai remover o primeiro indice do array
print_r($nomesB);

$temp = array_pop($nomesB); //pop vai remover ultimo valor  //posso guardar valor numa var
print_r($nomesB);
echo $temp.PHP_EOL;

