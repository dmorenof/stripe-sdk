<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentIntents\ByIntent\Confirm\Post;

enum CaptureMethodEnum: string
{
    case Automatic = 'automatic';
    case AutomaticAsync = 'automatic_async';
    case Manual = 'manual';
}
