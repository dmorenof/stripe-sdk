<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Billing\Alert;

enum StatusEnum: string
{
    case Active = 'active';
    case Archived = 'archived';
    case Inactive = 'inactive';
}
