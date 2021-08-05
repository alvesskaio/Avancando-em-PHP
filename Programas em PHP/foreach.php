<?php

$contaCorrente = [
    '123.456.789-10' => [
        'titular' => 'Kaio',
        'saldo' => 10000
    ],
    '123.456.789-12' => [
        'titular' => 'Daniele',
        'saldo' => 2500
    ],
    '123.567.891-22' => [
        'titular' => 'Wagner',
        'saldo' => 3000
    ]
];

$contaCorrente['123.522.891-22']=[
    'titular' => 'Claudia',
    'saldo' => 2000
];

//podemos adicionar um elemento ao array dessa forma aqui encima 

foreach ($contaCorrente as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}