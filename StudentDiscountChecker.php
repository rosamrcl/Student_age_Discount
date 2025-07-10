<?php

class StudentDiscountChecker
{
    const age = 25;

    public function  apply($value): bool
    {
        if ($value <= self::age) {
            return true;
        } else {
            return false;
        }
    }
}
?>