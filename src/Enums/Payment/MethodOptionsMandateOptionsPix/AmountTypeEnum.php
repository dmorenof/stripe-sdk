<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodOptionsMandateOptionsPix;

enum AmountTypeEnum: string
{
    case Fixed = 'fixed';
    case Maximum = 'maximum';
}
