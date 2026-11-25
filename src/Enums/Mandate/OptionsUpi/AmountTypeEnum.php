<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Mandate\OptionsUpi;

enum AmountTypeEnum: string
{
    case Fixed = 'fixed';
    case Maximum = 'maximum';
}
