<?php

declare(strict_types=1);

namespace StripeSDK\Enums\AcssDebitRequestVariant1\MandateOptions;

enum TransactionTypeEnum: string
{
    case Business = 'business';
    case Personal = 'personal';
}
