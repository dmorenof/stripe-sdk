<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SubscriptionSchedules\Post\PauseSchedulesItem\Resume\Settings;

enum PaymentBehaviorEnum: string
{
    case ResumeOnPaymentAttempt = 'resume_on_payment_attempt';
    case ResumeOnPaymentSuccess = 'resume_on_payment_success';
}
