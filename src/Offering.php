<?php

namespace App;

use Exception;

class Offering
{
    private $maxInvestments;
    private $name;
    private $investments = [];

    public function __construct(string $name, int $maxInvestments = 10)
    {
        $this->name = $name;
        $this->maxInvestments = $maxInvestments;
    }

    public function getName() {
        return $this->name;
    }

    public function getMaxInvestments() {
        return $this->maxInvestments;
    }

    public function addInvestment($investment) {
        if (count($this->investments) === $this->maxInvestments) {
            throw new Exception(
                'You are only allowed to have ' . $this->maxInvestments . ' investments for this offering'
            );
        } else {
            $this->investments[] = $investment;
        }
    }
}