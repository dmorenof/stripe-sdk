<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Dispute;

/**
 * DisputeEnhancedEvidenceMastercardCompliance
 */
final class EnhancedEvidenceMastercardCompliance extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fee_acknowledged',
    ];

    /**
     * A field acknowledging the fee incurred when countering a Mastercard compliance dispute. If this field is set to true, evidence can be submitted for the compliance dispute.
     */
    public bool $fee_acknowledged;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fee_acknowledged' => is_bool($value) ? $this->fee_acknowledged = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
