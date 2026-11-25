<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Dispute;

/**
 * DisputeEnhancedEvidence
 */
final class EnhancedEvidence extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Dispute\EnhancedEvidenceMastercardCompliance $mastercard_compliance;
    public \StripeSDK\DTOs\Dispute\EnhancedEvidenceVisaCompellingEvidence3 $visa_compelling_evidence_3;
    public \StripeSDK\DTOs\Dispute\EnhancedEvidenceVisaCompliance $visa_compliance;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mastercard_compliance' => $value instanceof \stdClass ? $this->mastercard_compliance = new \StripeSDK\DTOs\Dispute\EnhancedEvidenceMastercardCompliance($value) : parent::assignMember($name, $value),
            'visa_compelling_evidence_3' => $value instanceof \stdClass ? $this->visa_compelling_evidence_3 = new \StripeSDK\DTOs\Dispute\EnhancedEvidenceVisaCompellingEvidence3($value) : parent::assignMember($name, $value),
            'visa_compliance' => $value instanceof \stdClass ? $this->visa_compliance = new \StripeSDK\DTOs\Dispute\EnhancedEvidenceVisaCompliance($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
