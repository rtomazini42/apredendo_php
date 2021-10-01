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
    ],
    '229.564.896-12' => [
        'titular' => "Carol",
        'saldo' => 250000
    ]
    
];

$contasCorrentes['123.456.789-90'] = sacar($contasCorrentes['123.456.789-90'], 500);
$contasCorrentes['123.456.789-90'] = sacar($contasCorrentes['123.456.789-90'], 130);

$contasCorrentes['123.564.896-91'] = depositar($contasCorrentes['123.564.896-91'], 337);

unset($contasCorrentes['229.564.896-12']);

echo "<ul>";
//foreach ($contasCorrentes as $cpf => $conta){
    //$contasCorrentes['123.456.789-90'] = sacar($contasCorrentes['123.456.789-90'], 500);
    //exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
    //exibeMensagem("$cpf $conta[titular] $conta[saldo]");
    //list('titular' => $titular, 'saldo' => $saldo) = $conta;
    //['titular' => $titular, 'saldo' => $saldo] = $conta;
    //exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
    //exibeMensagem("$cpf $titular $saldo");
   // exibeConta($conta);
    //echo $cpf . " " . $conta['titular']. PHP_EOL;
    
//}
echo "</ul>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contas Correntes</title>
     
</head>
<body>
 <h1>Contas Correntes</h1>
 <dl>
         <?php foreach($contasCorrentes as $cpf => $conta){ ?>
            <dt>
                <h3><?php echo $conta['titular']; ?> </h3>
                <h4><?php echo $cpf; ?></h4>
            </dt>
            <dd>
                Saldo: <?php echo $conta['saldo']; ?>
            </dd>
            <?php } ?>
     </dl>
</body>
</html>