<?php
function exibirMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta) {
        exibirMensagem ("Você não pode sacar esse valor."); 
    } else {
        $conta['saldo']-= $valorASacar;
    }
    return $conta;
}

function depositar($conta, $valorADepositar)
{
    if ($valorADepositar < 0) {
        exibirMensagem("Você só pode depositar valores positivos."); 
    } else {
        $conta['saldo'] += $valorADepositar;
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

$contaCorrente['123.456.789-10']= sacar($contaCorrente['123.456.789-10'],1000);
$contaCorrente['123.567.891-22']= depositar($contaCorrente['123.567.891-22'], 10000);


foreach ($contaCorrente as $cpf => $conta) {
    exibirMensagem("$cpf  {$conta['titular']} {$conta['saldo']}");
} 
