<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\CardPaymentMethodOptions;

enum OvercaptureEnum: string
{
    case IfAvailable = 'if_available';
    case Never_ = 'never';
}
