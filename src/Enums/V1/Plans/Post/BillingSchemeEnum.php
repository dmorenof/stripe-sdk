<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Plans\Post;

enum BillingSchemeEnum: string
{
    case PerUnit = 'per_unit';
    case Tiered = 'tiered';
}
