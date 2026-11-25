<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Card;

enum StatusEnum: string
{
    case Active = 'active';
    case Canceled = 'canceled';
    case Inactive = 'inactive';
}
