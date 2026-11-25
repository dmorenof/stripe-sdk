<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Gelato\EmailReportError;

enum CodeEnum: string
{
    case EmailUnverifiedOther = 'email_unverified_other';
    case EmailVerificationDeclined = 'email_verification_declined';
}
