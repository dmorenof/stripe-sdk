<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\CardPaymentMethodOptions;

enum MulticaptureEnum: string
{
    case IfAvailable = 'if_available';
    case Never_ = 'never';
}
