<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Invoice\PaymentMethodOptionsAcssDebitMandateOptions;

enum TransactionTypeEnum: string
{
    case Business = 'business';
    case Personal = 'personal';
}
