<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InstallmentsPlanRequest2Variant1;

enum InstallmentsPlanRequest2Variant1TypeEnum: string
{
    case Bonus = 'bonus';
    case FixedCount = 'fixed_count';
    case Revolving = 'revolving';
}
