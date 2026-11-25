<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\CardAuthorizationControls;

enum CardPresencesEnum: string
{
    case NotPresent = 'not_present';
    case Present = 'present';
}
