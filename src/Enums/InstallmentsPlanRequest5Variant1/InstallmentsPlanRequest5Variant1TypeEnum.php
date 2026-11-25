<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InstallmentsPlanRequest5Variant1;

enum InstallmentsPlanRequest5Variant1TypeEnum: string
{
    case Bonus = 'bonus';
    case FixedCount = 'fixed_count';
    case Revolving = 'revolving';
}
