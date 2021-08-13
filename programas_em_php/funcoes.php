<?php

function exibirMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibirMensagem('Você não pode depositar valores mnores que zero.');
    }
    return $conta;
}

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibirMensagem('Você não pode sacar esse valor.');
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}