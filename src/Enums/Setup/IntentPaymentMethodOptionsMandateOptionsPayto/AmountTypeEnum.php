<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Setup\IntentPaymentMethodOptionsMandateOptionsPayto;

enum AmountTypeEnum: string
{
    case Fixed = 'fixed';
    case Maximum = 'maximum';
}
