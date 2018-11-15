<?php

    require 'vendor/autoload.php';

    use \App\Offering;
    use \App\Investor;
    use \App\Investment;

    $offering1 = new Offering('Offering 1', 3);

    $investor = new Investor('John', 'Smith', 'john@example.com');

    echo $investor->getApproved() . "\n";

    $investor->setApproved(1);

    echo $investor->getApproved() . "\n";

    for ($i = 1; $i < 3; $i++) {
        $investment = new Investment(1000, 'credit card', $offering1, $investor);
    }

    echo $offering1->getName() . "<br>";

    echo $investor->getTotalDollarsInvested();