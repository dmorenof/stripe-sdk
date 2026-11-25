<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Dispute;

enum EligibilityTypesEnum: string
{
    case MastercardCompliance = 'mastercard_compliance';
    case VisaCompellingEvidence3 = 'visa_compelling_evidence_3';
    case VisaCompliance = 'visa_compliance';
}
