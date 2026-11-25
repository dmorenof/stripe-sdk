<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Paypal;

enum CaptureMethodEnum: string
{
    case Empty_ = '';
    case Manual = 'manual';
}
