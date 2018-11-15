<?php

    require 'vendor/autoload.php';

    use \App\Offerings;

    $offering1 = new Offerings('Offering 1');
    $offering2 = new Offerings('Offering 2');

    echo $offering1->__toString();
    echo $offering2->__toString();