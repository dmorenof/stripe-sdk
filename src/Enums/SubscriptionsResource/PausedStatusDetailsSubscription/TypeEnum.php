<?php

declare(strict_types=1);

namespace StripeSDK\Enums\SubscriptionsResource\PausedStatusDetailsSubscription;

enum TypeEnum: string
{
    case FinalPaymentFailure = 'final_payment_failure';
    case FirstPaymentFailure = 'first_payment_failure';
    case PauseRequested = 'pause_requested';
    case System = 'system';
    case TrialEndWithoutPaymentMethod = 'trial_end_without_payment_method';
}
