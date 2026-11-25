<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Dispute;

/**
 * DisputeEnhancedEligibility
 */
final class EnhancedEligibility extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\Dispute\EnhancedEligibilityMastercardCompliance $mastercard_compliance;
    public \StripeSDK\DTOs\Dispute\EnhancedEligibilityVisaCompellingEvidence3 $visa_compelling_evidence_3;
    public \StripeSDK\DTOs\Dispute\EnhancedEligibilityVisaCompliance $visa_compliance;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'mastercard_compliance' => $value instanceof \stdClass ? $this->mastercard_compliance = new \StripeSDK\DTOs\Dispute\EnhancedEligibilityMastercardCompliance($value) : parent::assignMember($name, $value),
            'visa_compelling_evidence_3' => $value instanceof \stdClass ? $this->visa_compelling_evidence_3 = new \StripeSDK\DTOs\Dispute\EnhancedEligibilityVisaCompellingEvidence3($value) : parent::assignMember($name, $value),
            'visa_compliance' => $value instanceof \stdClass ? $this->visa_compliance = new \StripeSDK\DTOs\Dispute\EnhancedEligibilityVisaCompliance($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
