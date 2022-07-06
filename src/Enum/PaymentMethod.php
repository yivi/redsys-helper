<?php

declare(strict_types=1);

namespace Yivoff\Redsys\Enum;

enum PaymentMethod: string
{

    case Bizum = 'z';

    case Paypal = 'p';

    case Transfer = 'R';

    case Masterpass = 'N';

    case CreditCard = 'C';

    public function validForTransactionType(TransactionType $type): bool
    {
        return match ($this) {
            PaymentMethod::CreditCard => true,
            PaymentMethod::Bizum =>
                $type === TransactionType::Authorization
                || $type === TransactionType::SeparatePreauthorization
                || $type === TransactionType::SeparateConfirmation,
            PaymentMethod::Paypal =>
                $type === TransactionType::Authorization
                || $type === TransactionType::Preauthorization
                || $type === TransactionType::Paygold,
            self::Transfer =>
                $type === TransactionType::Authorization
                || $type === TransactionType::Paygold,
            self::Masterpass =>
                $type === TransactionType::Authorization
                || $type === TransactionType::SeparatePreauthorization
                || $type === TransactionType::Paygold
        };
    }

}
