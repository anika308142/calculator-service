<?php

namespace Anika308142\Calculator;

use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    public function add( $a, $b )
    {
        $result = $a + $b;
        return view('Calculator::add',compact('result'));
    }

    public function subtract( $a, $b )
    {
        $result = $a - $b;
        return view('Calculator::add',compact('result'));
    }
}
