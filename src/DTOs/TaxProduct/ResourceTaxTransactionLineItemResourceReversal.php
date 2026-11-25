<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductResourceTaxTransactionLineItemResourceReversal
 */
final class ResourceTaxTransactionLineItemResourceReversal extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'original_line_item',
    ];

    protected const array VALIDATION = [
        'original_line_item' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The `id` of the line item to reverse in the original transaction.
     */
    public string $original_line_item {
        set {
            $this->assigning('original_line_item', $value);
            $this->original_line_item = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'original_line_item' => is_string($value) ? $this->original_line_item = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
