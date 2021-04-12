<?php

namespace App;

class NumerosPrimos { 

    public function Calcular(int $limite)
    {
        $sequencia     = range(2, $limite);
        $numerosprimos = array_filter($sequencia, function ($numero) {
            return $this->IsPrimo($numero,$numero);
        });

        return array_values($numerosprimos);
    }

    private function IsPrimo(int $numero, string $divisor)
    {
        if($divisor < 2)
            return true;

        if($numero % $divisor === 0)
            return false;

    }
}
