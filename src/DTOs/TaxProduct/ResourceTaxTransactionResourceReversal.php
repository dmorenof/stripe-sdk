<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductResourceTaxTransactionResourceReversal
 */
final class ResourceTaxTransactionResourceReversal extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'original_transaction' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The `id` of the reversed `Transaction` object.
     */
    public ?string $original_transaction {
        set {
            $this->assigning('original_transaction', $value);
            $this->original_transaction = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'original_transaction' => $value === null || is_string($value) ? $this->original_transaction = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
