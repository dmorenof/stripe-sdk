<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\IntentTypeSpecificPaymentMethodOptionsClient;

enum CaptureMethodEnum: string
{
    case AutomaticDelayed = 'automatic_delayed';
    case Manual = 'manual';
    case ManualPreferred = 'manual_preferred';
}
