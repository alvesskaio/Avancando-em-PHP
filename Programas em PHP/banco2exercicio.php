<?php

require_once 'funcoes.php';

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

$contaCorrente['123.456.789-10']= sacar($contaCorrente['123.456.789-10'],1000);
$contaCorrente['123.567.891-22']= depositar($contaCorrente['123.567.891-22'], 10000);


foreach ($contaCorrente as $cpf => $conta) {
    exibirMensagem("$cpf  {$conta['titular']} {$conta['saldo']}");
} 
