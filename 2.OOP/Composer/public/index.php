<?php

require __DIR__ . '/../vendor/autoload.php';

$id = new \Ramsey\Uuid\UuidFactory();

echo $id->uuid4();

new APP\paymentGateWay\Paddle\Transaction();