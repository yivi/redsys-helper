<?php

declare(strict_types=1);

namespace Yivoff\Redsys\Enum;

enum CardBrand: int
{

    case Visa = 1;

    case Mastercard = 2;

    case Diners = 6;

    case Privada = 7;

    case Amex = 8;

    case Jcb = 9;

    case Upi = 22;
}
