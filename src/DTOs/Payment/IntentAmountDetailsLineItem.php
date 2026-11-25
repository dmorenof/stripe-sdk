<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentIntent LineItem
 */
final class IntentAmountDetailsLineItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'object_',
        'product_name',
        'quantity',
        'unit_cost',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'product_code' => [
            'maxLength' => 5000,
        ],
        'product_name' => [
            'maxLength' => 5000,
        ],
        'unit_of_measure' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The discount applied on this line item represented in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal). An integer greater than 0.
     *
     * This field is mutually exclusive with the `amount_details[discount_amount]` field.
     */
    public ?int $discount_amount;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Payment\IntentAmountDetailsLineItem\ObjectEnum $object_;
    /**
     * Payment method-specific information for line items.
     */
    public ?\StripeSDK\DTOs\Payment\FlowsAmountDetailsResourceLineItemsListResourceLineItemResourcePaymentMethodOptions $payment_method_options;
    /**
     * The product code of the line item, such as an SKU. Required for L3 rates. At most 12 characters long.
     */
    public ?string $product_code {
        set {
            $this->assigning('product_code', $value);
            $this->product_code = $value;
        }
    }
    /**
     * The product name of the line item. Required for L3 rates. At most 1024 characters long.
     *
     * For Cards, this field is truncated to 26 alphanumeric characters before being sent to the card networks. For PayPal, this field is truncated to 127 characters.
     */
    public string $product_name {
        set {
            $this->assigning('product_name', $value);
            $this->product_name = $value;
        }
    }
    /**
     * The quantity of items. Required for L3 rates. An integer greater than 0.
     */
    public int $quantity;
    /**
     * Contains information about the tax on the item.
     */
    public ?\StripeSDK\DTOs\Payment\FlowsAmountDetailsResourceLineItemsListResourceLineItemResourceTax $tax;
    /**
     * The unit cost of the line item represented in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal). Required for L3 rates. An integer greater than or equal to 0.
     */
    public int $unit_cost;
    /**
     * A unit of measure for the line item, such as gallons, feet, meters, etc. Required for L3 rates. At most 12 alphanumeric characters long.
     */
    public ?string $unit_of_measure {
        set {
            $this->assigning('unit_of_measure', $value);
            $this->unit_of_measure = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'discount_amount' => $value === null || is_int($value) ? $this->discount_amount = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Payment\IntentAmountDetailsLineItem\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_options' => $value === null || $value instanceof \stdClass ? $this->payment_method_options = $value === null ? null : new \StripeSDK\DTOs\Payment\FlowsAmountDetailsResourceLineItemsListResourceLineItemResourcePaymentMethodOptions($value) : parent::assignMember($name, $value),
            'product_code' => $value === null || is_string($value) ? $this->product_code = $value : parent::assignMember($name, $value),
            'product_name' => is_string($value) ? $this->product_name = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'tax' => $value === null || $value instanceof \stdClass ? $this->tax = $value === null ? null : new \StripeSDK\DTOs\Payment\FlowsAmountDetailsResourceLineItemsListResourceLineItemResourceTax($value) : parent::assignMember($name, $value),
            'unit_cost' => is_int($value) ? $this->unit_cost = $value : parent::assignMember($name, $value),
            'unit_of_measure' => $value === null || is_string($value) ? $this->unit_of_measure = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
