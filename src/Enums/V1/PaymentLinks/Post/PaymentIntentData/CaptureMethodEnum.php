<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentLinks\Post\PaymentIntentData;

enum CaptureMethodEnum: string
{
    case Automatic = 'automatic';
    case AutomaticAsync = 'automatic_async';
    case Manual = 'manual';
}
