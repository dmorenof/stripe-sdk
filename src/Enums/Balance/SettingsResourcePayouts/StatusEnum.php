<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Balance\SettingsResourcePayouts;

enum StatusEnum: string
{
    case Disabled = 'disabled';
    case Enabled = 'enabled';
}
