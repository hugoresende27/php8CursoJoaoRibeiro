<?php

//3 formas de definir um array
$arr1 = array('a','b','c');
$arr2 = ['a','b','c'];
$arr3[] = 'Hugo';

print_r($arr3);

//array associativo
$cliente = [
    'nome' => 'Hugo',
    'idade' => 33,
    'profissao' => 'programador',
];
$cliente['nome'] = 'Zacarias';
echo $cliente['profissao'];

print_r($cliente);

$cliente2['nome'] = 'Zecas';
print_r($cliente2);

//arrays multidimensionais

$empresa = [
    'administracao' => [
        'Joao admin',
        'carlos socio'
    ],
    'contabilidade' =>[
        'Mariana',
        'Joaquim',
        'Antonio'
    ],
    'armazem' => [
        'gestores' => [
            'carlos',
            'marco',
            'Zona_Norte' => [
                'xxxxx',
                'zzzzz'
            ]
        ],
        'operadores' => [
            'nando',
            'manuel',
            'luis'
        ]
    ]
];


print_r($empresa['administracao']);

var_dump($empresa['contabilidade']);

var_dump($empresa['armazem']['operadores']);

print_r($empresa['armazem']['gestores']['Zona_Norte']);

////////////////////função list ou extract (funciona com arrays associativos) /////////////////////////////

extract($cliente);
echo $nome.PHP_EOL;
echo $idade.PHP_EOL;

$nomes = ['Hugo','Emanuel','Teixeira','Resende'];
list($n1,$n2,$n3,$n4) = $nomes;

echo $n1.PHP_EOL;
echo $n2.PHP_EOL;
echo $n3.PHP_EOL;
echo $n4.PHP_EOL;


