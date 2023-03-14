<?php

declare(strict_types=1);

function my_autoloader($class)
{
    $path = __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';
    require_once $path;
}

spl_autoload_register('my_autoloader');

use App\paymentGateWay\Strip\Transaction as StripTransaction;

new App\paymentGateWay\Paddle\Transaction();
new StripTransaction();