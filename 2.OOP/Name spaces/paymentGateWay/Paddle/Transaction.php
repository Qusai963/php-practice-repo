<?php

namespace paymentGateWay\Paddle;

// Or you can include it in index.php file.
require_once 'CustomerProfile.php';

class Transaction
{
    public function __construct()
    {
        echo 'Paddle' . '<br>';

        // Create object from the same namespace.
        new CustomerProfile();

        // Create object from another namespace.
        print_r(
            new \DateTime()
        );  // '\' for global name space or we can use (use DateTime;)
        echo '<br>';
    }
}