<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\CustomerSessions\Post\Components\CustomerSheet\Features;

enum RedisplayFiltersEnum: string
{
    case Always = 'always';
    case Limited = 'limited';
    case Unspecified = 'unspecified';
}
