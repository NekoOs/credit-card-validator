<?php

namespace NekoOs\Validator\Support\Facades;

use Inacho\CreditCard as Checker;

class CreditCard
{
    public static function isValidNumber($number, $type = null)
    {
        $separators = ['-', '.', ' ', ','];
        $number = str_replace($separators, '', trim((string)$number));
        return Checker::validCreditCard($number, $type);
    }

    public static function isValidDate($date)
    {
        $date = explode('-', $date);
        return (count($date) === 2) ? (bool)Checker::validDate($date[0], $date[1]) : false;
    }

    public static function isValidCvc($cvc, $type)
    {
        return (bool)Checker::validCvc($cvc, $type);
    }

    public static function isValidCvv($cvv, $type)
    {
        return static::isValidCvc($cvv, $type);
    }
}