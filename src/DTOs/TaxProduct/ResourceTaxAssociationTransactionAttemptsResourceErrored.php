<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductResourceTaxAssociationTransactionAttemptsResourceErrored
 */
final class ResourceTaxAssociationTransactionAttemptsResourceErrored extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'reason',
    ];

    /**
     * Details on why we couldn't commit the tax transaction.
     */
    public \StripeSDK\Enums\TaxProduct\ResourceTaxAssociationTransactionAttemptsResourceErrored\ReasonEnum $reason;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reason' => is_string($value) ? $this->reason = \StripeSDK\Enums\TaxProduct\ResourceTaxAssociationTransactionAttemptsResourceErrored\ReasonEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
