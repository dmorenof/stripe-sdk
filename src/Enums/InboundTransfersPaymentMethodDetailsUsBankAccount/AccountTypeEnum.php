<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InboundTransfersPaymentMethodDetailsUsBankAccount;

enum AccountTypeEnum: string
{
    case Checking = 'checking';
    case Savings = 'savings';
}
