<?php
namespace App;

class Offerings
{
    private $maxInvestments = 10;
    private $name;

    public function __construct(string $name, int $maxInvestments)
    {
        // $this->ensureIsValidOffering($name);

        $this->name = $name;
        $this->max_investments = $maxInvestments;

    }

    public static function fromString(string $email): self
    {
        // return new self($email);
    }

    public function __toString(): string
    {
        return $this->name;
    }

    private function ensureIsValidOffering(string $email): void
    {
        // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     throw new InvalidArgumentException(
                
        //         'You have gone over the maximum number of investments'
        //     );
        // }
    }
}