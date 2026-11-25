<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingTransactionReceiptData
 */
final class TransactionReceiptData extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The description of the item. The maximum length of this field is 26 characters.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The quantity of the item.
     */
    public ?float $quantity;
    /**
     * The total for this line item in cents.
     */
    public ?int $total;
    /**
     * The unit cost of the item in cents.
     */
    public ?int $unit_cost;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'quantity' => $value === null || is_float($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'total' => $value === null || is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            'unit_cost' => $value === null || is_int($value) ? $this->unit_cost = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
