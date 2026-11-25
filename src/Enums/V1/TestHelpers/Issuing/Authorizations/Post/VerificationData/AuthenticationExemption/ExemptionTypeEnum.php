<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\AuthenticationExemption;

enum ExemptionTypeEnum: string
{
    case LowValueTransaction = 'low_value_transaction';
    case TransactionRiskAnalysis = 'transaction_risk_analysis';
    case Unknown = 'unknown';
}
