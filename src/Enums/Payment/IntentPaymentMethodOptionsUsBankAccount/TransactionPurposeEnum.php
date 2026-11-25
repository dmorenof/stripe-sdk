<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\IntentPaymentMethodOptionsUsBankAccount;

enum TransactionPurposeEnum: string
{
    case Goods = 'goods';
    case Other = 'other';
    case Services = 'services';
    case Unspecified = 'unspecified';
}
