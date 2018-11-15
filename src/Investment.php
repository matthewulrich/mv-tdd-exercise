<?php

namespace App;

class Investment {

    private $amount;
    private $paymentMethod;
    private $offering;
    private $investor;

    public function __construct(int $amount, string $paymentMethod, $offering, $investor)
    {
        $this->amount = $amount;
        $this->paymentMethod = $paymentMethod;

        $offering->addInvestment($this);
        $this->offering = $offering;

        $investor->addInvestment($this);
        $this->investor = $investor;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getPaymentMethod() {
        return $this->paymentMethod;
    }
    
}