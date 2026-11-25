<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account\CapabilityFutureRequirements;

enum DisabledReasonEnum: string
{
    case Other = 'other';
    case Pausedinactivity = 'paused.inactivity';
    case Pendingonboarding = 'pending.onboarding';
    case Pendingreview = 'pending.review';
    case PlatformDisabled = 'platform_disabled';
    case PlatformPaused = 'platform_paused';
    case Rejectedinactivity = 'rejected.inactivity';
    case Rejectedother = 'rejected.other';
    case RejectedunsupportedBusiness = 'rejected.unsupported_business';
    case RequirementsfieldsNeeded = 'requirements.fields_needed';
}
