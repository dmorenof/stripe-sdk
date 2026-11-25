<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\CardholderRequirements;

enum DisabledReasonEnum: string
{
    case Listed = 'listed';
    case Rejectedlisted = 'rejected.listed';
    case RequirementspastDue = 'requirements.past_due';
    case UnderReview = 'under_review';
}
