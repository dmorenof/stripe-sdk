<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\Upi\MandateOptions;

enum AmountTypeEnum: string
{
    case Fixed = 'fixed';
    case Maximum = 'maximum';
}
