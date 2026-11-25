<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InsightsResourcesPaymentEvaluation\DisputeOpened;

enum ReasonEnum: string
{
    case AccountNotAvailable = 'account_not_available';
    case CreditNotProcessed = 'credit_not_processed';
    case CustomerInitiated = 'customer_initiated';
    case Duplicate = 'duplicate';
    case Fraudulent = 'fraudulent';
    case General = 'general';
    case Noncompliant = 'noncompliant';
    case ProductNotReceived = 'product_not_received';
    case ProductUnacceptable = 'product_unacceptable';
    case SubscriptionCanceled = 'subscription_canceled';
    case Unrecognized = 'unrecognized';
}
