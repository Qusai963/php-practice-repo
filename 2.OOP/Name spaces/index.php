<?php

/*
 In this code we have two classes called Transaction, so we can't require all of them,
 and to solve this problem we used namespaces.
 */
require_once 'paymentGateWay/Strip/Transaction.php';
require_once 'paymentGateWay/Paddle/Transaction.php';

// To use 'StripTransaction' instead of 'paymentGateWay\Strip\Transaction'
use paymentGateWay\Strip\Transaction as StripTransaction;

new paymentGateWay\Paddle\Transaction();
new StripTransaction();