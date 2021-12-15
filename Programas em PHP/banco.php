<?php

function exibirMensagem(string $mensagem)
{
    echo $mensagem . "<br>";
}

function depositar(array $conta, float $valorADepositar):array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibirMensagem('Você não pode depositar valores mnores que zero.');
    }
    return $conta;
}

function sacar( array $conta, float $valorASacar):array
{
    if ($valorASacar > $conta['saldo']) {
        exibirMensagem('Você não pode sacar esse valor.');
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

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

$contaCorrente['123.456.789-10'] = sacar($contaCorrente['123.456.789-10'], 500);

$contaCorrente['123.456.789-12'] = depositar($contaCorrente['123.456.789-12'], 2500);

$contaCorrente['123.567.891-22'] = depositar($contaCorrente['123.567.891-22'], 3400);



foreach ($contaCorrente as $cpf => $conta) {    
    exibirMensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}


