<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PaymentsPrimitivesPaymentRecordsResourcePaymentMethod\CardDetailsResourceThreeDSecure;

enum ExemptionIndicatorEnum: string
{
    case LowRisk = 'low_risk';
    case None = 'none';
}
