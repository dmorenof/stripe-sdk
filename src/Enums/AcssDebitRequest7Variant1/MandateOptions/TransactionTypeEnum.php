<?php

declare(strict_types=1);

namespace StripeSDK\Enums\AcssDebitRequest7Variant1\MandateOptions;

enum TransactionTypeEnum: string
{
    case Business = 'business';
    case Personal = 'personal';
}
