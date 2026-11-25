<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\AcssDebit\MandateOptions;

enum TransactionTypeEnum: string
{
    case Business = 'business';
    case Personal = 'personal';
}
