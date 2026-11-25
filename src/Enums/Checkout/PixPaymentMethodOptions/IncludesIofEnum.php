<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\PixPaymentMethodOptions;

enum IncludesIofEnum: string
{
    case Always = 'always';
    case Never_ = 'never';
}
