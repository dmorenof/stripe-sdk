<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Cards\Post\SpendingControls;

enum CardPresencesEnum: string
{
    case NotPresent = 'not_present';
    case Present = 'present';
}
