<?php

namespace NekoOs\Validator\Support\Facades;

class CreditCard
{
    /**
     * Valida un numero de tarjeta de credito
     * @param string $number numero de la tarjeta
     * @param string $type franquicia de la tarjeta
     *
     * @return array: (valid, number, type).
     * */
    public static function isValidNumber($number, $type = null)
    {
        $separators = ['-', '.', ' ',','];
        $number = str_replace($separators, '', trim((string)$number));
        return \Inacho\CreditCard::validCreditCard($number);
    }

    /**
     * Valida una fecha de una tarjeta
     * @param string $date fecha en formato yyyy-mm
     *
     * @return boolean
     * */
    public static function isValidDate($date)
    {
        $date = explode('-', $date);
        return (bool)\Inacho\CreditCard::validDate($date[0], $date[1]);
    }

    /**
     * Valida una fecha de una tarjeta
     * @param int $cvc codigo de seguridad de la tarjeta
     * @param string $type franquicia de la tarjeta
     *
     * @return boolean
     * */
    public static function isValidCvc($cvc, $type)
    {
        return (bool)\Inacho\CreditCard::validCvc($cvc, $type);
    }
}