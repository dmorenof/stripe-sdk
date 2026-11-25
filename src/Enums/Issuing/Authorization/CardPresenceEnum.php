<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Authorization;

enum CardPresenceEnum: string
{
    case NotPresent = 'not_present';
    case Present = 'present';
}
