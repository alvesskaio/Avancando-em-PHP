<?php   

$conta1 = [
    'titular' => 'Kaio',
    'saldo' => 10000
];

$conta2 = [
    'titular' => 'Daniele',
    'saldo' => 2500
];

$conta3 = [
    'titular' => 'Wagner',
    'saldo' => 3000
];

$contaCorrente = [$conta1 , $conta2 , $conta3];

for ($i=0; $i < count($contaCorrente); $i++) { 
    echo $contaCorrente[$i]['titular'] . PHP_EOL;
}