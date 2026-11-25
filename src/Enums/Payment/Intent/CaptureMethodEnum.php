<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\Intent;

enum CaptureMethodEnum: string
{
    case Automatic = 'automatic';
    case AutomaticAsync = 'automatic_async';
    case Manual = 'manual';
}
