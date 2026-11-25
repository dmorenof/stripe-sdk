<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Dispute;

/**
 * DisputeEnhancedEvidenceVisaCompliance
 */
final class EnhancedEvidenceVisaCompliance extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'fee_acknowledged',
    ];

    /**
     * A field acknowledging the fee incurred when countering a Visa compliance dispute. If this field is set to true, evidence can be submitted for the compliance dispute. Stripe collects a 500 USD (or local equivalent) amount to cover the network costs associated with resolving compliance disputes. Stripe refunds the 500 USD network fee if you win the dispute.
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
