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

    /*
     * Offering Unit Tests
     */

    // Test that name is set when Offering is created
    public function testOfferingIsGivenName()
    {
        $originalName = 'Offering 1';

        $offering = new Offering('Offering 1', 3);

        $expectedName = $offering->getName();

        $this->assertEquals($originalName, $expectedName);
    }

    // Test that maximum investments allowed is set when Offering is created
    public function testMaximumInvestments()
    {
        $originalMaxInvestments = 3;

        $offering = new Offering('Offering 1', 3);

        $expectedMaxInvestments = $offering->getMaxInvestments();

        $this->assertEquals($originalMaxInvestments, $expectedMaxInvestments);
    }

    // Test that an exceptin is thrown when maximum number of Investments has been reached and their is an attemp to add an Investment to the Offering
    public function testMaxInvestmentsReached()
    {
        $this->expectException(Exception::class);

        $offering = new Offering('Offering 1', 3);

        $investor = new Investor('John', 'Smith', 'john@example.com');
        $investor->setApproved();

        for ($i = 1; $i < 5; $i++) {
            $investment = new Investment(1000, 'credit card', $offering, $investor);
        }
    }

    /*
     * Investor Unit Tests
     */
    // Test that first name is set when Investor is created
    public function testInvestorHasFirstName()
    {
        $originalFirstName = 'John';

        $investor = new Investor('John', 'Smith', 'john@example.com');

        $expectedFirstName = $investor->getFirstName();

        $this->assertEquals($originalFirstName, $expectedFirstName);
    }

    // Test that last name is set when Investor is created
    public function testInvestorHasLastName()
    {
        $originalLastName = 'Smith';

        $investor = new Investor('John', 'Smith', 'john@example.com');

        $expectedLastName = $investor->getLastName();

        $this->assertEquals($originalLastName, $expectedLastName);
    }

    // Test that email is set when Investor is created
    public function testInvestorHasEmail()
    {
        $originalEmail = 'john@example.com';

        $investor = new Investor('John', 'Smith', 'john@example.com');

        $expectedEmail = $investor->getEmail();

        $this->assertEquals($originalEmail, $expectedEmail);
    }

    // Test that approved is set when Investor is created
    public function testInvestorHasApproved()
    {
        $approved = 0;

        $investor = new Investor('John', 'Smith', 'john@example.com');

        $expectedApproved = $investor->getApproved();

        $this->assertEquals($approved, $expectedApproved);
    }

    // Test to get the total dollars invested by an investor
    public function testTotalDollarsInvested()
    {
        $originalInvested = 10000;

        $offering = new Offering('Offering 1', 10);

        $investor = new Investor('John', 'Smith', 'john@example.com');
        $investor->setApproved();

        for ($i = 1; $i < 11; $i++) {
            $investment = new Investment(1000, 'credit card', $offering, $investor);
        }

        $expectedInvested = $investor->getTotalDollarsInvested();

        $this->assertEquals($originalInvested, $expectedInvested);
    }

    /*
     * Investment Unit Tests
     */
    // Test that amount is set when Investment is created
    public function testInvestmentHasAmount()
    {
        $originalAmount = 1000;

        $offering = new Offering('Offering 1', 10);

        $investor = new Investor('John', 'Smith', 'john@example.com');
        $investor->setApproved();

        $investment = new Investment(1000, 'credit card', $offering, $investor);

        $expectedAmount = $investment->getAmount();

        $this->assertEquals($originalAmount, $expectedAmount);
    }

    // Test that payment method is set when Investment is created
    public function testInvestmentHasPaymentMethod()
    {
        $originalPaymentMethod = 'credit card';

        $offering = new Offering('Offering 1', 10);

        $investor = new Investor('John', 'Smith', 'john@example.com');
        $investor->setApproved();

        $investment = new Investment(1000, 'credit card', $offering, $investor);

        $expectedPaymentMethod = $investment->getPaymentMethod();

        $this->assertEquals($originalPaymentMethod, $expectedPaymentMethod);
    }

    // Test an Investment is associated with an Offering
    public function testInvestmentHasOffering()
    {
        $offering = new Offering('Offering 1', 10);

        $investor = new Investor('John', 'Smith', 'john@example.com');
        $investor->setApproved();

        $investment = new Investment(1000, 'credit card', $offering, $investor);

        $expectedOffering = $investment->getOffering();

        $this->assertInstanceOf(Offering::class, $expectedOffering);
    }

    // Test an Investment is associated with an Investor
    public function testInvestmentHasInvestor()
    {
        $offering = new Offering('Offering 1', 10);

        $investor = new Investor('John', 'Smith', 'john@example.com');
        $investor->setApproved();

        $investment = new Investment(1000, 'credit card', $offering, $investor);

        $expectedInvestor = $investment->getInvestor();

        $this->assertInstanceOf(Investor::class, $expectedInvestor);
    }
}