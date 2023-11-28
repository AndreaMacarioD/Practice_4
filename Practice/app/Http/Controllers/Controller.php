<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller 
{
    public function obtenerPrecioConDescuento($precio, $descuento)
    {
        return $precio - ($precio * ($descuento / 100));
    }

    public function validarCorreoElectronico($correo)
    {
        return filter_var($correo, FILTER_VALIDATE_EMAIL);
    }

    public function contarElementosArray($array)
    {
        return count($array);
    }

    public function generarCadenaAleatoria($longitud)
    {
        return str_random($longitud);
    }

    public function invertirCadena($cadena)
    {
        return strrev($cadena);
    }
}
