<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodOptionsMandateOptionsUpi;

enum AmountTypeEnum: string
{
    case Fixed = 'fixed';
    case Maximum = 'maximum';
}
