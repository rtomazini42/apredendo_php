<?php
#include 'funcoes.php';
require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-90' => [
        'titular' => "Maria",
        'saldo' => 100000
    ],
    '123.564.896-91' => [
        'titular' => "Renan",
        'saldo' => 5000
    ],
    '345.564.896-12' => [
        'titular' => "Giuliana",
        'saldo' => 12000
    ],
    '069.564.896-12' => [
        'titular' => "Luna",
        'saldo' => 250000
    ]
];

$contasCorrentes['123.456.789-90'] = sacar($contasCorrentes['123.456.789-90'], 500);
$contasCorrentes['123.456.789-90'] = sacar($contasCorrentes['123.456.789-90'], 130);

$contasCorrentes['123.564.896-91'] = depositar($contasCorrentes['123.564.896-91'], 337);

foreach ($contasCorrentes as $cpf => $conta){
    //$contasCorrentes['123.456.789-90'] = sacar($contasCorrentes['123.456.789-90'], 500);
    //exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
    //exibeMensagem("$cpf $conta[titular] $conta[saldo]");
    //list('titular' => $titular, 'saldo' => $saldo) = $conta;
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    //exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
    exibeMensagem("$cpf $titular $saldo");
    //echo $cpf . " " . $conta['titular']. PHP_EOL;
    
}