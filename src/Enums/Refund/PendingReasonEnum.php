<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Refund;

enum PendingReasonEnum: string
{
    case ChargePending = 'charge_pending';
    case InsufficientFunds = 'insufficient_funds';
    case Processing = 'processing';
}
