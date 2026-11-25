<?php

declare(strict_types=1);

namespace StripeSDK\Enums\CardPresentRequest3Variant1\Routing;

enum RequestedPriorityEnum: string
{
    case Domestic = 'domestic';
    case International = 'international';
}
