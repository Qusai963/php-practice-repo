<?php

require_once '../App/Enums/Status.php';
require_once '../App/PaymentGateWay/Paddle/Transaction.php';

use \App\PaymentGateWay\Paddle\Transaction;

$paddle = (new Transaction())
    ->setStatus('paid');

var_dump($paddle);