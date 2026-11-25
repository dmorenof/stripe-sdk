<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductResourceTaxAssociationTransactionAttempts
 */
final class ResourceTaxAssociationTransactionAttempts extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'source',
        'status',
    ];

    protected const array VALIDATION = [
        'source' => [
            'maxLength' => 5000,
        ],
        'status' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\TaxProduct\ResourceTaxAssociationTransactionAttemptsResourceCommitted $committed;
    public \StripeSDK\DTOs\TaxProduct\ResourceTaxAssociationTransactionAttemptsResourceErrored $errored;
    /**
     * The source of the tax transaction attempt. This is either a refund or a payment intent.
     */
    public string $source {
        set {
            $this->assigning('source', $value);
            $this->source = $value;
        }
    }
    /**
     * The status of the transaction attempt. This can be `errored` or `committed`.
     */
    public string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'committed' => $value instanceof \stdClass ? $this->committed = new \StripeSDK\DTOs\TaxProduct\ResourceTaxAssociationTransactionAttemptsResourceCommitted($value) : parent::assignMember($name, $value),
            'errored' => $value instanceof \stdClass ? $this->errored = new \StripeSDK\DTOs\TaxProduct\ResourceTaxAssociationTransactionAttemptsResourceErrored($value) : parent::assignMember($name, $value),
            'source' => is_string($value) ? $this->source = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
