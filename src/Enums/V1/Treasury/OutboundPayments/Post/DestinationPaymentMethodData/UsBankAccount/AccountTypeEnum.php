<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Treasury\OutboundPayments\Post\DestinationPaymentMethodData\UsBankAccount;

enum AccountTypeEnum: string
{
    case Checking = 'checking';
    case Savings = 'savings';
}
