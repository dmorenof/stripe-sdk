<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\PagesCheckoutSessionSavedPaymentMethodOptions;

enum MethodSaveEnum: string
{
    case Disabled = 'disabled';
    case Enabled = 'enabled';
}
