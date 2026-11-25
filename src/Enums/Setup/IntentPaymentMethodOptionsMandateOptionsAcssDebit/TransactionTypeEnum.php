<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Setup\IntentPaymentMethodOptionsMandateOptionsAcssDebit;

enum TransactionTypeEnum: string
{
    case Business = 'business';
    case Personal = 'personal';
}
