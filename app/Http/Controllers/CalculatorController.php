<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add($num1, $num2)
    {
        return $num1 + $num2;
    }
    public function sub($num1, $num2)
    {
        return $num1 - $num2;
    }
    public function mul($num1, $num2)
    {
        return $num1 * $num2;
    }
    public function div($num1, $num2)
    {
        return $num1 / $num2;
    }
}
