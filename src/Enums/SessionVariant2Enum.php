<?php

declare(strict_types=1);

namespace StripeSDK\Enums;

enum SessionVariant2Enum: string
{
    case OneOff = 'one_off';
    case Recurring = 'recurring';
}
