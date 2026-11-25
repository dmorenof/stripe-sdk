<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\ConfirmationTokens\Post\PaymentMethodData\NaverPay;

enum PayFundingEnum: string
{
    case Card = 'card';
    case Points = 'points';
}
