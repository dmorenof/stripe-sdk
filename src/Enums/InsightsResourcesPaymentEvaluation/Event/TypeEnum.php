<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InsightsResourcesPaymentEvaluation\Event;

enum TypeEnum: string
{
    case DisputeOpened = 'dispute_opened';
    case EarlyFraudWarningReceived = 'early_fraud_warning_received';
    case Refunded = 'refunded';
    case UserInterventionRaised = 'user_intervention_raised';
    case UserInterventionResolved = 'user_intervention_resolved';
}
