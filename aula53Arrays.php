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


$empresa2 = [
    'administracao' => ['hugo','ze'],
    'secretaria' => 'rui',
    'contabilidade' => 'pedro'
];
///////////// KEY EXISTS ///////////////////////////////////
if (key_exists('contabilidade',$empresa2)){
    echo "SIM";
}else {
    echo "Não";
}
echo PHP_EOL;
///////////// IN ARRAY ///////////////////////////////////
if (in_array('hugo',$empresa2['administracao'])){
    echo "IN";
}else {
    echo "Not in";
}

/////////////REMOVER DUPLICADOS array_unique//////////////////////////
$nomes = ['hugo','hugo','zecas','toninho','zecas'];

$final = array_unique(($nomes));
print_r($final);

$valores = ['100','+100','1000','0200','200'];
$fin = array_unique($valores, SORT_NUMERIC);
print_R($fin);//[0] => 100 | [2] => 1000 | [3] => 0200
$fin = array_unique($valores, SORT_STRING);
print_r($fin);//[0] => 100 | [1] => +100 | [2] => 1000 | [3] => 0200 | [4] => 200
echo PHP_EOL;

/////////////SHUFFLES ARRAYS //////////////////////////
shuffle($valores);
foreach($valores as $v){
    echo $v.PHP_EOL;
}

///////////// ARRAYS FILTER //////////////////////////

$val = [1,2,3,4,5,6,7,8,9,10,15,25,45];
$valFinal = array_filter($val, "multi5");//função callback chamada aqui entre ""
print_r ($valFinal);

function impares($v){
    return $v % 2 != 0;
}
function pares($v){
    return $v % 2 == 0;
}
function multi5($v){
    return $v % 5 == 0;
}

///////////// ARRAYS keyfirst e keylast //////////////////////////
echo array_key_first($val);
$vvv = [
    10 => 166,
    100 => 2,
    1000 => 3
];
echo array_key_first($vvv).PHP_EOL;
//echo $vvv[0];//Notice  Undefined offset: 0 
echo $vvv[array_key_first($vvv)].PHP_EOL;   //166 vai mostrar sempre o valor do PRIMEIRO index do array associativo
echo $vvv[array_key_last($vvv)].PHP_EOL;   //166 vai mostrar sempre o valor do ÚLTIMO index do array associativo

///////////// ARRAYS map //////////////////////////

$nomesC = ['trex','cobra','snake','psa'];

$finalC = array_map("saudacao",$nomesC);
print_r($finalC);

function saudacao($x){
    return "Olá $x";
}

$valC = [1,2,3,4,5,6,7,8,9,10,15,25,45];
print_r(array_map("quadrado",$valC));//array_map como argumentos recebe o nome da funcao " " e o array

function quadrado($x){//função escrita aqui, recebe um argumento e retorna o seu elevado ao quadrado
    return $x*$x;
}