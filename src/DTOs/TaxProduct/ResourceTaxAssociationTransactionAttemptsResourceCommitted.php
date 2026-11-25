<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductResourceTaxAssociationTransactionAttemptsResourceCommitted
 */
final class ResourceTaxAssociationTransactionAttemptsResourceCommitted extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'transaction',
    ];

    protected const array VALIDATION = [
        'transaction' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The [Tax Transaction](https://docs.stripe.com/api/tax/transaction/object)
     */
    public string $transaction {
        set {
            $this->assigning('transaction', $value);
            $this->transaction = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'transaction' => is_string($value) ? $this->transaction = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
