<?php

namespace App;

class Investment {

    private $amount;
    private $paymentMethod;

    public function __construct(int $amount, string $paymentMethod)
    {
        // $this->ensureIsValidOffering($name);

        $this->amount = $amount;
        $this->paymentMethod = $paymentMethod;

    }
    
}