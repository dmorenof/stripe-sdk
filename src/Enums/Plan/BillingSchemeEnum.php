<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Plan;

enum BillingSchemeEnum: string
{
    case PerUnit = 'per_unit';
    case Tiered = 'tiered';
}
