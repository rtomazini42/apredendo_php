<?php

$idadesList = array(21,23,14,12,33,31);

$idadesList2 = [21,11,34,12,34,55,66];
$primeiraIdade = $idadesList[0];

list($idadeVinicius, $idadeMaria, $idadejoao) = $idadesList;
//echo $primeiraIdade;

foreach($idadesList as $idade){
    echo $idade.PHP_EOL;
}