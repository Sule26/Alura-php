<?php


function exibeMensagem($mensagem)
{
    echo $mensagem . '<br>';
}

function saque(array $conta, float $valor): array
{
    if ($conta['saldo'] >= $valor) {
        exibeMensagem('Valor sacado com sucesso!');
        $conta['saldo'] -= $valor;
    } else {
        exibeMensagem('Saldo insuficiente! Erro no saque!');
    }
    return $conta;
}

function depositar(array $conta, float $valor): array
{
    if ($valor > 0) {
        $conta['saldo'] += $valor;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}



function exibeConta(array $conta)
{
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo <li>";
}
