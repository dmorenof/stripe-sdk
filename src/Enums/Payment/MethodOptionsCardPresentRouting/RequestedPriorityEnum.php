<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodOptionsCardPresentRouting;

enum RequestedPriorityEnum: string
{
    case Domestic = 'domestic';
    case International = 'international';
}
