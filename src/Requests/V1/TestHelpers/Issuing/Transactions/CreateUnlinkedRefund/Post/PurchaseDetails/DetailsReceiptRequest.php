<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Transactions\CreateUnlinkedRefund\Post\PurchaseDetails;

/**
 * receipt_specs
 */
final class DetailsReceiptRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 26,
        ],
    ];

    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Format: decimal
     */
    public string $quantity;
    public int $total;
    public int $unit_cost;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'quantity' => is_string($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'total' => is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            'unit_cost' => is_int($value) ? $this->unit_cost = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
