<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Authorization\Request;

enum ReasonEnum: string
{
    case AccountDisabled = 'account_disabled';
    case CardActive = 'card_active';
    case CardCanceled = 'card_canceled';
    case CardExpired = 'card_expired';
    case CardInactive = 'card_inactive';
    case CardholderBlocked = 'cardholder_blocked';
    case CardholderInactive = 'cardholder_inactive';
    case CardholderVerificationRequired = 'cardholder_verification_required';
    case InsecureAuthorizationMethod = 'insecure_authorization_method';
    case InsufficientFunds = 'insufficient_funds';
    case NetworkFallback = 'network_fallback';
    case NotAllowed = 'not_allowed';
    case PinBlocked = 'pin_blocked';
    case SpendingControls = 'spending_controls';
    case StripeInternalError = 'stripe_internal_error';
    case SuspectedFraud = 'suspected_fraud';
    case VerificationFailed = 'verification_failed';
    case WebhookApproved = 'webhook_approved';
    case WebhookDeclined = 'webhook_declined';
    case WebhookError = 'webhook_error';
    case WebhookTimeout = 'webhook_timeout';
}
