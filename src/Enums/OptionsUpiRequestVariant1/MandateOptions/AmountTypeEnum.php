<?php

declare(strict_types=1);

namespace StripeSDK\Enums\OptionsUpiRequestVariant1\MandateOptions;

enum AmountTypeEnum: string
{
    case Fixed = 'fixed';
    case Maximum = 'maximum';
}
