<?php

$idade = 19;

echo "Você só pode entrar se tiver mais de 18 anos." .PHP_EOL;

if($idade >= 18 ){
    echo "Você tem $idade anos " . PHP_EOL;
    echo "Pode Entrar";
} else{
    echo "Você só tem $idade anos. Não pode entrar";
}

echo PHP_EOL;
echo "Adeus";