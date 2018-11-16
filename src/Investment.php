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

        if ($investor->getApproved() === 1) {
            $this->offering = $offering;
            $this->investor = $investor;
            
            $offering->addInvestment($this);
            $investor->addInvestment($this);
        }
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getPaymentMethod() {
        return $this->paymentMethod;
    }

    public function getOffering() {
        return $this->offering ?? false;
    }

    public function getInvestor() {
        return $this->investor ?? false;
    }
}