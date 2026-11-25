<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\CardholderAuthorizationControls;

enum CardPresencesEnum: string
{
    case NotPresent = 'not_present';
    case Present = 'present';
}
