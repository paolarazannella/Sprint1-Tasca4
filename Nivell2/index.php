<?php

require_once "PokerDice.php";

$dados = [];

for ($i = 0; $i < 5; $i++) {
    $dados[] = new PokerDice();
}

for ($i = 0; $i < 5; $i++) {
    $dados[$i]->tirar();

    echo "Dado " . ($i + 1) . ": ";
    echo $dados[$i]->getUltimaFigura();
    echo "<br>";
}

echo "Total de tiradas= ";
echo PokerDice::getTiradasTotales();