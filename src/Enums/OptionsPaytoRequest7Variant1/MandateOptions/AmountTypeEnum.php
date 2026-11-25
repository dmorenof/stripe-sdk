<?php

declare(strict_types=1);

namespace StripeSDK\Enums\OptionsPaytoRequest7Variant1\MandateOptions;

enum AmountTypeEnum: string
{
    case Empty_ = '';
    case Fixed = 'fixed';
    case Maximum = 'maximum';
}
