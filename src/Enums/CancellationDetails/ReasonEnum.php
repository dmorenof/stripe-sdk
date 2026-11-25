<?php

declare(strict_types=1);

namespace StripeSDK\Enums\CancellationDetails;

enum ReasonEnum: string
{
    case CanceledByRetentionPolicy = 'canceled_by_retention_policy';
    case CancellationRequested = 'cancellation_requested';
    case PaymentDisputed = 'payment_disputed';
    case PaymentFailed = 'payment_failed';
}
