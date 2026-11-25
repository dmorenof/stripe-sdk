<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Price;

enum TypeEnum: string
{
    case OneTime = 'one_time';
    case Recurring = 'recurring';
}
