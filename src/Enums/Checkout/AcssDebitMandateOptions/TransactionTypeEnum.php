<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\AcssDebitMandateOptions;

enum TransactionTypeEnum: string
{
    case Business = 'business';
    case Personal = 'personal';
}
