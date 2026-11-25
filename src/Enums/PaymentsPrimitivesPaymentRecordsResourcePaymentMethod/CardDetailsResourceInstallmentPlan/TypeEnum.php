<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceInstallmentPlan;

enum TypeEnum: string
{
    case Bonus = 'bonus';
    case FixedCount = 'fixed_count';
    case Revolving = 'revolving';
}
