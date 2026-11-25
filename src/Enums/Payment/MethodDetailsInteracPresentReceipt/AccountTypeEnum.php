<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodDetailsInteracPresentReceipt;

enum AccountTypeEnum: string
{
    case Checking = 'checking';
    case Savings = 'savings';
    case Unknown = 'unknown';
}
