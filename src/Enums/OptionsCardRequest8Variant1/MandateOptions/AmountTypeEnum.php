<?php

declare(strict_types=1);

namespace StripeSDK\Enums\OptionsCardRequest8Variant1\MandateOptions;

enum AmountTypeEnum: string
{
    case Fixed = 'fixed';
    case Maximum = 'maximum';
}
