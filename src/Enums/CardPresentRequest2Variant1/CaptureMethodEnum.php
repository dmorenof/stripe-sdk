<?php

declare(strict_types=1);

namespace StripeSDK\Enums\CardPresentRequest2Variant1;

enum CaptureMethodEnum: string
{
    case Manual = 'manual';
    case ManualPreferred = 'manual_preferred';
}
