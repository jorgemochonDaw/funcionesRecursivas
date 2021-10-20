<?php

namespace App;

class FuncionesRecursivas
{
    public $lista1 = array();
    public $lista2 = array();
    public $lista = array();

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

    public function array1($n1, $n2, $n3, $n4, $n5)
    {
        $this->lista1 = array($n1, $n2, $n3, $n4, $n5);
    }

    public function array2($n1, $n2, $n3, $n4, $n5)
    {
        $this->lista2 = array($n1, $n2, $n3, $n4, $n5);
    }

    public function compararArrays()
    {
        if ($this->lista1 == $this->lista2) {
            return "Los arrays son iguales.";
        } else {
            return "Los arrays no son iguales";
        }
    }

    public function lista($n1, $n2, $n3, $n4, $n5)
    {
        $this->lista = array($n1, $n2, $n3, $n4, $n5);
    }

    public function compararNumeroIndice($indiceBuscar)
    {
        $clave = array_search($indiceBuscar, $this->lista);
        if (empty($clave)) {
            return "No coincide ningun numero.";
        } else {
            return "Si coincide el numero con su indice, posicion: "  . $clave;
        }
    }
}
