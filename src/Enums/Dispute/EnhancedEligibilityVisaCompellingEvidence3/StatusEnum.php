<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Dispute\EnhancedEligibilityVisaCompellingEvidence3;

enum StatusEnum: string
{
    case NotQualified = 'not_qualified';
    case Qualified = 'qualified';
    case RequiresAction = 'requires_action';
}
