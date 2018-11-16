<?php

namespace App;

class Investor
{
    private $firstName;
    private $lastName;
    private $email;
    private $approved = 0;
    private $investments = [];

    public function __construct(string $firstName, string $lastName, string $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function setApproved() {
        $this->approved = 1;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getApproved() {
        return $this->approved;
    }

    public function addInvestment($investment) {
        $this->investments[] = $investment;
    }

    public function getTotalDollarsInvested() {
        $sum = 0;

        foreach ($this->investments as $investment) {
            $sum += $investment->getAmount();
        }

        return $sum;
    }
}