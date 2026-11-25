<?php

declare(strict_types=1);

namespace StripeSDK\Requests\EnhancedEvidenceRequest2Variant1;

/**
 * enhanced_evidence
 */
final class Request2Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\EnhancedEvidenceRequest2Variant1\MastercardComplianceRequest $mastercard_compliance;
    public \StripeSDK\Requests\EnhancedEvidenceRequest2Variant1\Evidence3Request $visa_compelling_evidence_3;
    public \StripeSDK\Requests\EnhancedEvidenceRequest2Variant1\VisaComplianceRequest $visa_compliance;
}
