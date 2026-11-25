<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Mandate\Payto;

enum AmountTypeEnum: string
{
    case Fixed = 'fixed';
    case Maximum = 'maximum';
}
