<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PlatformEarningFeeSource;

enum TypeEnum: string
{
    case Charge = 'charge';
    case Payout = 'payout';
}
