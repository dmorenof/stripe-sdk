<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * enhanced_evidence
 */
final class EvidenceVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\MastercardComplianceRequest $mastercard_compliance;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\Evidence3Request $visa_compelling_evidence_3;
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaComplianceRequest $visa_compliance;
}
