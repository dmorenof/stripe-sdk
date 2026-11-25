<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Mandate\AcssDebit;

enum TransactionTypeEnum: string
{
    case Business = 'business';
    case Personal = 'personal';
}
