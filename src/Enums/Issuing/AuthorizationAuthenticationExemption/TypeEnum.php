<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\AuthorizationAuthenticationExemption;

enum TypeEnum: string
{
    case LowValueTransaction = 'low_value_transaction';
    case TransactionRiskAnalysis = 'transaction_risk_analysis';
    case Unknown = 'unknown';
}
