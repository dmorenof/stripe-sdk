<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\FinancialAccountsResourceTogglesSettingStatusDetails;

enum CodeEnum: string
{
    case Activating = 'activating';
    case CapabilityNotRequested = 'capability_not_requested';
    case FinancialAccountClosed = 'financial_account_closed';
    case RejectedOther = 'rejected_other';
    case RejectedUnsupportedBusiness = 'rejected_unsupported_business';
    case RequirementsPastDue = 'requirements_past_due';
    case RequirementsPendingVerification = 'requirements_pending_verification';
    case RestrictedByPlatform = 'restricted_by_platform';
    case RestrictedOther = 'restricted_other';
}
