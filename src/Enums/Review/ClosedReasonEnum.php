<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Review;

enum ClosedReasonEnum: string
{
    case Acknowledged = 'acknowledged';
    case Approved = 'approved';
    case Canceled = 'canceled';
    case Disputed = 'disputed';
    case PaymentNeverSettled = 'payment_never_settled';
    case Redacted = 'redacted';
    case Refunded = 'refunded';
    case RefundedAsFraud = 'refunded_as_fraud';
}
