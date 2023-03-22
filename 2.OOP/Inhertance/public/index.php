<?php

require_once '../Classes/Toaster.php';
require_once '../Classes/Toasterpro.php';

$toaster = new Toasterpro();

$toaster->addSlice('bread');
$toaster->addSlice('bread');

$toaster->toastBagel();