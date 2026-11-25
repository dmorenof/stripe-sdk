<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\ReceivedCredit;

enum FailureCodeEnum: string
{
    case AccountClosed = 'account_closed';
    case AccountFrozen = 'account_frozen';
    case InternationalTransaction = 'international_transaction';
    case Other = 'other';
}
