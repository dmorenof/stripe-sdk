<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\AmazonPay;

enum CaptureMethodEnum: string
{
    case Manual = 'manual';
}
