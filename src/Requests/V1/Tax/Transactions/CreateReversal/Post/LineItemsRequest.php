<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Transactions\CreateReversal\Post;

/**
 * transaction_line_item_reversal
 */
final class LineItemsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'amount_tax',
        'original_line_item',
        'reference',
    ];

    protected const array VALIDATION = [
        'original_line_item' => [
            'maxLength' => 5000,
        ],
        'reference' => [
            'maxLength' => 500,
        ],
    ];

    public int $amount;
    public int $amount_tax;
    public \StripeSDK\Requests\V1\Tax\Transactions\CreateReversal\Post\LineItemsItem\MetadataMapRequest $metadata;
    public string $original_line_item {
        set {
            $this->assigning('original_line_item', $value);
            $this->original_line_item = $value;
        }
    }
    public int $quantity;
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_tax' => is_int($value) ? $this->amount_tax = $value : parent::assignMember($name, $value),
            'original_line_item' => is_string($value) ? $this->original_line_item = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
