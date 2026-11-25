<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Calculations\Post;

/**
 * calculation_line_item
 */
final class LineItemsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
    ];

    protected const array VALIDATION = [
        'performance_location' => [
            'maxLength' => 5000,
        ],
        'product' => [
            'maxLength' => 5000,
        ],
        'reference' => [
            'maxLength' => 500,
        ],
    ];

    public int $amount;
    public \StripeSDK\Requests\V1\Tax\Calculations\Post\LineItemsItem\MetadataMapRequest $metadata;
    public string $performance_location {
        set {
            $this->assigning('performance_location', $value);
            $this->performance_location = $value;
        }
    }
    public string $product {
        set {
            $this->assigning('product', $value);
            $this->product = $value;
        }
    }
    public int $quantity;
    public string $reference {
        set {
            $this->assigning('reference', $value);
            $this->reference = $value;
        }
    }
    public \StripeSDK\Enums\V1\Tax\Calculations\Post\LineItemsItem\TaxBehaviorEnum $tax_behavior;
    public string $tax_code;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'performance_location' => is_string($value) ? $this->performance_location = $value : parent::assignMember($name, $value),
            'product' => is_string($value) ? $this->product = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\V1\Tax\Calculations\Post\LineItemsItem\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'tax_code' => is_string($value) ? $this->tax_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
