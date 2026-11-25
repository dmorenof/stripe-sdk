<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentMethodConfigurations\ByConfiguration\Post\Multibanco\DisplayPreference;

enum PreferencePreferenceEnum: string
{
    case None = 'none';
    case Off = 'off';
    case On = 'on';
}
