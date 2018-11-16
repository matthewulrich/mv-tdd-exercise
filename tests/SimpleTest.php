<?php

use PHPUnit\Framework\TestCase;
use \App\Offering;
use \App\Investor;
use \App\Investment;

class SimpleTest extends TestCase
{

    public function testTrueIsTrue()
    {
        $foo = true;
        $this->assertTrue($foo);
    }

    // Test that name is set when Offering is created
    public function testOfferingIsGivenName()
    {
        $originalName = 'Offering 1';

        $offering1 = new Offering('Offering 1', 3);

        $expectedName = $offering1->getName();

        $this->assertEquals($originalName, $expectedName);
    }

    // Test that maximum investments allowed is set when Offering is created
    public function testMaximumInvestments()
    {
        $originalMaxInvestments = 3;

        $offering1 = new Offering('Offering 1', 3);

        $expectedMaxInvestments = $offering1->getMaxInvestments();

        $this->assertEquals($originalMaxInvestments, $expectedMaxInvestments);
    }

    // Test that an exceptin is thrown when maximum number of Investments has been reached and their is an attemp to add an Investment to the Offering
    public function testMaxInvestmentsReached()
    {
        $this->expectException(Exception::class);

        $offering1 = new Offering('Offering 1', 3);

        $investor = new Investor('John', 'Smith', 'john@example.com');

        for ($i = 1; $i < 5; $i++) {
            $investment = new Investment(1000, 'credit card', $offering1, $investor);
        }
    }
}