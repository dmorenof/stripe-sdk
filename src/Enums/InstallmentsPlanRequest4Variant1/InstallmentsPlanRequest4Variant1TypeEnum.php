<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InstallmentsPlanRequest4Variant1;

enum InstallmentsPlanRequest4Variant1TypeEnum: string
{
    case Bonus = 'bonus';
    case FixedCount = 'fixed_count';
    case Revolving = 'revolving';
}
