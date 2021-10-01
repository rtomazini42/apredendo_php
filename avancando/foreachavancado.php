<?php


$contasCorrentes =  [
    5515151 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    1252651 => [
        'titular' => 'Mônica',
        'saldo' => 2500
    ],
    5568912 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    2528352 => [
        'titular' => 'Leo',
        'saldo' => 600
    ]
];

$contasCorrentes[5586321] = [
    'titular' => 'Amélia',
    'saldo' => 250
];

foreach($contasCorrentes as $cpf => $conta){
    echo $cpf .PHP_EOL;
}