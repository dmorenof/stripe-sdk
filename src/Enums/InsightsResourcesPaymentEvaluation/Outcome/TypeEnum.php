<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InsightsResourcesPaymentEvaluation\Outcome;

enum TypeEnum: string
{
    case Failed = 'failed';
    case MerchantBlocked = 'merchant_blocked';
    case Rejected = 'rejected';
    case Rerouted = 'rerouted';
    case Succeeded = 'succeeded';
}
