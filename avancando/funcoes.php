<?php

function exibeMensagem($mensagem) 
{
    echo $mensagem .PHP_EOL;
}

function sacar(array $conta , float $valorASacar): array
{
    if ($valorASacar> $conta['saldo']){
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}   

function depositar($conta, $valorADepositar)
{
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}
