Credit Card Validator
---------------------

#### franchises 

```php
    visa
    mastercard
    amex
    dinersclub
    discover
    unionpay
    jcb
    visaelectron
    maestro
    forbrugsforeningen
    dankort
```

#### Available methods 

#### Validate a card number and return the type, state and number:


```php
$card = NekoOs\Validator\Support\Facades\CreditCard::isValidNumber('371449635398431');
print_r($card);
```

Result:

```
Array
(
    [valid] =>  (bool true or false)
    [number] => 371449635398431
    [type] => mastercard
)
```
##### Also is possible Validate a card number knowing the type (franchise): (Optional)

```php
$card = NekoOs\Validator\Support\Facades\CreditCard::isValidNumber('371449635398431', 'mastercard');
print_r($card);
```

Result:

```
Array
(
    [valid] => (bool true or false)
    [number] => 371449635398431
    [type] => mastercard
)
```

#### Validate the expiration date

```php
$validDate =  NekoOs\Validator\Support\Facades\CreditCard::isValidDate('2024-04');
var_dump($validDate);
```

Result:

```
 bool (true or false)
```

#### Validate the CVC

```php
$validCvc = NekoOs\Validator\Support\Facades\CreditCard::isValidCvc(234, 'visa');
var_dump($validCvc);
```

Result:

```
 bool (true or false)
```


