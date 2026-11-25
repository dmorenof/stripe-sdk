<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Mandate\Pix;

enum AmountTypeEnum: string
{
    case Fixed = 'fixed';
    case Maximum = 'maximum';
}
