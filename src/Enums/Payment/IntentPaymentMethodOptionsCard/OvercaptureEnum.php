<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\IntentPaymentMethodOptionsCard;

enum OvercaptureEnum: string
{
    case IfAvailable = 'if_available';
    case Never_ = 'never';
}
