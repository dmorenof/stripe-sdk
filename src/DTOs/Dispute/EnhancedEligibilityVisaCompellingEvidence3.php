<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Dispute;

/**
 * DisputeEnhancedEligibilityVisaCompellingEvidence3
 */
final class EnhancedEligibilityVisaCompellingEvidence3 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'required_actions',
        'status',
    ];

    /**
     * List of actions required to qualify dispute for Visa Compelling Evidence 3.0 evidence submission.
     */
    public \StripeSDK\Collections\Dispute\EnhancedEligibilityVisaCompellingEvidence3\RequiredActionsCollection $required_actions;
    /**
     * Visa Compelling Evidence 3.0 eligibility status.
     */
    public \StripeSDK\Enums\Dispute\EnhancedEligibilityVisaCompellingEvidence3\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Dispute\EnhancedEligibilityVisaCompellingEvidence3\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
