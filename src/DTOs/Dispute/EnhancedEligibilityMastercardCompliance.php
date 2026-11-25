<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Dispute;

/**
 * DisputeEnhancedEligibilityMastercardCompliance
 */
final class EnhancedEligibilityMastercardCompliance extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    /**
     * Mastercard compliance eligibility status.
     */
    public \StripeSDK\Enums\Dispute\EnhancedEligibilityMastercardCompliance\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Dispute\EnhancedEligibilityMastercardCompliance\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
