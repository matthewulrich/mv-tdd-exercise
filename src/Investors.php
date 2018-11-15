<?php

namespace App;

class Investors
{
    private $firstName;
    private $lastName;
    private $email;
    private $approved = 0;
    private $totalDollarsInvested = 0;

    public function __construct(string $firstName, string $lastName, string $email, int $approved)
    {
        // $this->ensureIsValidOffering($name);

        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;

    }

}