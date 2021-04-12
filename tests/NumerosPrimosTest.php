<?php

namespace Tests;

use PHPunit\Framework\TestCase;
use App\NumerosPrimos;

#nunca trabalhei com TDD mas utilizo todo dia isso nas tasks
#class
class NumerosPrimosTest extends TestCase
{
    #method
    public function testNumerosPrimos()
    {
        $numerosEsperados = [
            2,
            3,
            5,
            7,
            11,
            13
        ];

        $limite           = 15;
        $numerosPrimos    = new NumerosPrimos();
        $numerosRecebidos = $numerosPrimos->calcular($limite);

        #método não encontrado nessa classe para chamada porém decidi manter
        #pois não senti que era o intuito de tira-lo no enunciado do teste.
        $this->assertEquals($numerosEsperados, $numerosRecebidos);
    }
}
