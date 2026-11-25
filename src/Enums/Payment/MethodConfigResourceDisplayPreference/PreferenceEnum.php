<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodConfigResourceDisplayPreference;

enum PreferenceEnum: string
{
    case None = 'none';
    case Off = 'off';
    case On = 'on';
}
