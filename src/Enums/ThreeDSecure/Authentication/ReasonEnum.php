<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ThreeDSecure\Authentication;

enum ReasonEnum: string
{
    case CardholderAuthentication = 'cardholder_authentication';
    case IssuerRequested = 'issuer_requested';
    case LiabilityShift = 'liability_shift';
    case ProcessingCosts = 'processing_costs';
    case RegulatoryCompliance = 'regulatory_compliance';
}
