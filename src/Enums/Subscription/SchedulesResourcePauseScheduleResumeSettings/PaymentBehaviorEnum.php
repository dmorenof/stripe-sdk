<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Subscription\SchedulesResourcePauseScheduleResumeSettings;

enum PaymentBehaviorEnum: string
{
    case ResumeOnPaymentAttempt = 'resume_on_payment_attempt';
    case ResumeOnPaymentSuccess = 'resume_on_payment_success';
}
