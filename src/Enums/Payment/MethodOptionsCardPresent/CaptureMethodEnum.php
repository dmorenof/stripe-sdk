<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodOptionsCardPresent;

enum CaptureMethodEnum: string
{
    case Manual = 'manual';
    case ManualPreferred = 'manual_preferred';
}
