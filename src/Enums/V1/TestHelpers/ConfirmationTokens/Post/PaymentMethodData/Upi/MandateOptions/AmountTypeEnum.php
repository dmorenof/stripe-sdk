<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodData\Upi\MandateOptions;

enum AmountTypeEnum: string
{
    case Fixed = 'fixed';
    case Maximum = 'maximum';
}
