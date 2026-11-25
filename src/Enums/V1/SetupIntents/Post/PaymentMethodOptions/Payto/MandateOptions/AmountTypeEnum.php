<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\Payto\MandateOptions;

enum AmountTypeEnum: string
{
    case Empty_ = '';
    case Fixed = 'fixed';
    case Maximum = 'maximum';
}
