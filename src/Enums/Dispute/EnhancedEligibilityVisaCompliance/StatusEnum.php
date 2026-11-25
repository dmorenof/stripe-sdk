<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Dispute\EnhancedEligibilityVisaCompliance;

enum StatusEnum: string
{
    case FeeAcknowledged = 'fee_acknowledged';
    case RequiresFeeAcknowledgement = 'requires_fee_acknowledgement';
}
