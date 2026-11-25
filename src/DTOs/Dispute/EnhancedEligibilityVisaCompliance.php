<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Dispute;

/**
 * DisputeEnhancedEligibilityVisaCompliance
 */
final class EnhancedEligibilityVisaCompliance extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    /**
     * Visa compliance eligibility status.
     */
    public \StripeSDK\Enums\Dispute\EnhancedEligibilityVisaCompliance\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Dispute\EnhancedEligibilityVisaCompliance\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
