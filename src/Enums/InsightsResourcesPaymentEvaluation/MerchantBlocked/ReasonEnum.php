<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InsightsResourcesPaymentEvaluation\MerchantBlocked;

enum ReasonEnum: string
{
    case AuthenticationRequired = 'authentication_required';
    case BlockedForFraud = 'blocked_for_fraud';
    case InvalidPayment = 'invalid_payment';
    case Other = 'other';
}
