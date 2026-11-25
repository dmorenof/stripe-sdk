<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentMethodConfigurations\ByConfiguration\Post\Boleto\DisplayPreference;

enum PreferencePreferenceEnum: string
{
    case None = 'none';
    case Off = 'off';
    case On = 'on';
}
