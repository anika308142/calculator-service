<?php

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', [Anika308142\Calculator\CalculatorController::class,'add']);

Route::get('subtract/{a}/{b}', [Anika308142\Calculator\CalculatorController::class,'subtract']);
