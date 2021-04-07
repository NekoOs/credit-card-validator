<?php

namespace NekoOs\Validator\Support\Facades;

class CreditCard
{
    public static function isValid($number, $type)
    {
        return (bool)\Inacho\CreditCard::validCreditCard($number, $type)['valid'];
    }
}