<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account\Requirements;

enum DisabledReasonEnum: string
{
    case ActionRequiredrequestedCapabilities = 'action_required.requested_capabilities';
    case Listed = 'listed';
    case Other = 'other';
    case PlatformPaused = 'platform_paused';
    case Rejectedfraud = 'rejected.fraud';
    case RejectedincompleteVerification = 'rejected.incomplete_verification';
    case Rejectedlisted = 'rejected.listed';
    case Rejectedother = 'rejected.other';
    case RejectedplatformFraud = 'rejected.platform_fraud';
    case RejectedplatformOther = 'rejected.platform_other';
    case RejectedplatformTermsOfService = 'rejected.platform_terms_of_service';
    case RejectedtermsOfService = 'rejected.terms_of_service';
    case RequirementspastDue = 'requirements.past_due';
    case RequirementspendingVerification = 'requirements.pending_verification';
    case UnderReview = 'under_review';
}
