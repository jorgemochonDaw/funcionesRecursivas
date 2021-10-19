<?php

namespace App;

class FuncionesRecursivas
{

    public static function calcularPotencia($base, $exponente)
    {
        if ($exponente == 0) {
            return 1;
        } else {
            return $base * self::calcularPotencia($base, $exponente - 1);
        }
    }

    public static function calcularBinario($numero)
    {
        if ($numero < 1) {
            return;
        } else {
            self::calcularBinario(floor($numero / 2));
            echo $numero % 2;
        }
    }
}
