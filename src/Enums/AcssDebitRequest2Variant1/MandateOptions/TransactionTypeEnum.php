<?php

declare(strict_types=1);

namespace StripeSDK\Enums\AcssDebitRequest2Variant1\MandateOptions;

enum TransactionTypeEnum: string
{
    case Business = 'business';
    case Personal = 'personal';
}
