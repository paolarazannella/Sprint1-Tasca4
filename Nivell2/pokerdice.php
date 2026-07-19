<?php

class PokerDice
{
    private $figuras = ["As", "K", "Q", "J", "7", "8"];
    private $ultimaFigura;

    private static $tiradasTotales = 0;

    public function tirar()
    {
        $posicionAleatoria = rand(0, 5);

        $this->ultimaFigura = $this->figuras[$posicionAleatoria];

        self::$tiradasTotales++;
    }

    public function getUltimaFigura()
    {
        return $this->ultimaFigura;
    }

    public static function getTiradasTotales()
    {
        return self::$tiradasTotales;
    }
}