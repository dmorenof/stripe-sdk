<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InstallmentsPlanRequestVariant1;

enum InstallmentsPlanRequestVariant1TypeEnum: string
{
    case Bonus = 'bonus';
    case FixedCount = 'fixed_count';
    case Revolving = 'revolving';
}
