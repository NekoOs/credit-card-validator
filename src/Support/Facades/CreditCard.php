<?php

namespace NekoOs\Validator\Support\Facades;

class CreditCard
{
    public function isValid($number, $type): bool
    {
        return (bool)\Inacho\CreditCard::validCreditCard($number, $type)['valid'];
    }
}