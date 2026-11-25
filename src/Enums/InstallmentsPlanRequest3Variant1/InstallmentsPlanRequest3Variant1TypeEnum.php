<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InstallmentsPlanRequest3Variant1;

enum InstallmentsPlanRequest3Variant1TypeEnum: string
{
    case Bonus = 'bonus';
    case FixedCount = 'fixed_count';
    case Revolving = 'revolving';
}
