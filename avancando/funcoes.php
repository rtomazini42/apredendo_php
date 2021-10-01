<?php

function exibeMensagem($mensagem) 
{
    echo $mensagem .'<br>';
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

function exibeConta(array $conta){
    //echo  "<li>Titular: $conta[titular]. Saldo: $conta[saldo]</li>";
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}

?>

