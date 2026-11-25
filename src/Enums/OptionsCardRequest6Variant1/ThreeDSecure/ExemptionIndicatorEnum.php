<?php

declare(strict_types=1);

namespace StripeSDK\Enums\OptionsCardRequest6Variant1\ThreeDSecure;

enum ExemptionIndicatorEnum: string
{
    case LowRisk = 'low_risk';
    case None = 'none';
}
