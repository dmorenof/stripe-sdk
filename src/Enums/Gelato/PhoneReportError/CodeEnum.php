<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Gelato\PhoneReportError;

enum CodeEnum: string
{
    case PhoneUnverifiedOther = 'phone_unverified_other';
    case PhoneVerificationDeclined = 'phone_verification_declined';
}
