<?php
class StudentDiscountCheckerTest
{

    public function Age_for_discout()
    {

        $dicountAge = new StudentDiscountChecker();

        $ageValue = 25;
        $ageDiscoutValue = $dicountAge->apply(value: $ageValue);

        $expetedValue = true;
        $this->assertEquals($expetedValue, $ageDiscoutValue);
    }
    public function assertEquals($expetedValue, $actualValue)
    {
        if ($expetedValue != $actualValue) {
            $message = 'Expected: ' . $expetedValue . ' but got: ' . $actualValue;
            throw new Exception(message: $message);
        }
        echo 'Test Passed';
    }
}
