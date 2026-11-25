<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TerminalReaderReaderResource;

/**
 * LineItem
 *
 * Represents a line item to be displayed on the reader
 */
final class LineItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'description',
        'quantity',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The amount of the line item. A positive integer in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public int $amount;
    /**
     * Description of the line item.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The quantity of the line item.
     */
    public int $quantity;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
