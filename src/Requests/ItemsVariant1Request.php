<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * amount_details_line_item_param
 */
final class ItemsVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'product_name',
        'quantity',
        'unit_cost',
    ];

    protected const array VALIDATION = [
        'product_code' => [
            'maxLength' => 12,
        ],
        'product_name' => [
            'maxLength' => 1024,
        ],
        'unit_of_measure' => [
            'maxLength' => 12,
        ],
    ];

    public int $discount_amount;
    public \StripeSDK\Requests\LineItemsRequestVariant1Item\MethodOptionsRequest $payment_method_options;
    public string $product_code {
        set {
            $this->assigning('product_code', $value);
            $this->product_code = $value;
        }
    }
    public string $product_name {
        set {
            $this->assigning('product_name', $value);
            $this->product_name = $value;
        }
    }
    public int $quantity;
    public \StripeSDK\Requests\LineItemsRequestVariant1Item\LineItemsRequestVariant1ItemTaxRequest $tax;
    public int $unit_cost;
    public string $unit_of_measure {
        set {
            $this->assigning('unit_of_measure', $value);
            $this->unit_of_measure = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'discount_amount' => is_int($value) ? $this->discount_amount = $value : parent::assignMember($name, $value),
            'product_code' => is_string($value) ? $this->product_code = $value : parent::assignMember($name, $value),
            'product_name' => is_string($value) ? $this->product_name = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'unit_cost' => is_int($value) ? $this->unit_cost = $value : parent::assignMember($name, $value),
            'unit_of_measure' => is_string($value) ? $this->unit_of_measure = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
