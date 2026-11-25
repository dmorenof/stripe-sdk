<?php

declare(strict_types=1);

namespace StripeSDK\Enums\OffSessionRequest2Variant2;

enum Request2Variant2Enum: string
{
    case OneOff = 'one_off';
    case Recurring = 'recurring';
}
