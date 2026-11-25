<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Billing\CreditGrantsResourceBalanceDebit;

enum TypeEnum: string
{
    case CreditsApplied = 'credits_applied';
    case CreditsExpired = 'credits_expired';
    case CreditsVoided = 'credits_voided';
}
