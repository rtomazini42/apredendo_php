<?php

$conta1 = [
    'titular'=> "Renan",
    'saldo'=> 2000
];
$conta2 = [
    'titular'=> "Fernando",
    'saldo'=> 5000
];

$conta3 = [
    'titular'=> "Flavia",
    'saldo'=> 2000
];

$contasCorrentes = ['12345698698' => $conta1, '11010440470' => $conta2, '8056625412' => $conta3];

//for($i = 0; $i < count($contasCorrentes); $i++){
//    echo $contasCorrentes[$i]['titular'].PHP_EOL;
//}

//foreach($contasCorrentes as $conta){
//    echo $conta['titular']. PHP_EOL;
//}

foreach($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['titular'].PHP_EOL;
}