<?php

declare(strict_types=1);

namespace StripeSDK\Enums\CardPresentRequestVariant1\Routing;

enum RequestedPriorityEnum: string
{
    case Domestic = 'domestic';
    case International = 'international';
}
