<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\ReceivedDebit;

enum FailureCodeEnum: string
{
    case AccountClosed = 'account_closed';
    case AccountFrozen = 'account_frozen';
    case InsufficientFunds = 'insufficient_funds';
    case InternationalTransaction = 'international_transaction';
    case Other = 'other';
}
