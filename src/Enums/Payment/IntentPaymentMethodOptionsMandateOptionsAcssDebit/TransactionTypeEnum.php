<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\IntentPaymentMethodOptionsMandateOptionsAcssDebit;

enum TransactionTypeEnum: string
{
    case Business = 'business';
    case Personal = 'personal';
}
