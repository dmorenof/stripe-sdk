<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Invoice\PaymentMethodOptionsMandateOptionsUpi;

enum AmountTypeEnum: string
{
    case Fixed = 'fixed';
    case Maximum = 'maximum';
}
