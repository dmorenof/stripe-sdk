<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\CardAuthorizationControls\BlockedCardPresencesItem;

enum CardPresencesEnum: string
{
    case NotPresent = 'not_present';
    case Present = 'present';
}
