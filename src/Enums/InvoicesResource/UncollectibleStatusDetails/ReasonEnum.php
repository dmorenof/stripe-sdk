<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InvoicesResource\UncollectibleStatusDetails;

enum ReasonEnum: string
{
    case MaxPaymentAttempts = 'max_payment_attempts';
    case PaymentNotReceived = 'payment_not_received';
    case SubscriptionCanceled = 'subscription_canceled';
    case SubscriptionPaused = 'subscription_paused';
    case UserForgiven = 'user_forgiven';
}
