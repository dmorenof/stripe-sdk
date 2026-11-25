<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\IntentPaymentMethodOptionsMandateOptionsPayto;

enum AmountTypeEnum: string
{
    case Fixed = 'fixed';
    case Maximum = 'maximum';
}
