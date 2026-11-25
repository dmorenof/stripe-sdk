<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Deleted;

/**
 * DeletedDiscount
 */
final class Discount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'deleted',
        'id',
        'object_',
        'source',
        'start',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'checkout_session' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'deleted' => [
            'jsonSchema' => '{"enum":[true]}',
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'invoice' => [
            'maxLength' => 5000,
        ],
        'invoice_item' => [
            'maxLength' => 5000,
        ],
        'subscription' => [
            'maxLength' => 5000,
        ],
        'subscription_item' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The Checkout session that this coupon is applied to, if it is applied to a particular session in payment mode. Not present for subscription mode.
     */
    public ?string $checkout_session {
        set {
            $this->assigning('checkout_session', $value);
            $this->checkout_session = $value;
        }
    }
    /**
     * The ID of the customer associated with this discount.
     */
    public ?\StripeSDK\DTOs\Deleted\Discount\CustomerDTO $customer;
    /**
     * The ID of the account representing the customer associated with this discount.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * Always true for a deleted object
     */
    public bool $deleted {
        set {
            $this->assigning('deleted', $value);
            $this->deleted = $value;
        }
    }
    /**
     * The ID of the discount object. Discounts can't be fetched by ID. Use `expand[]=discounts` in API calls to expand discount IDs in an array.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The invoice that the discount's coupon was applied to, if it was applied directly to a particular invoice.
     */
    public ?string $invoice {
        set {
            $this->assigning('invoice', $value);
            $this->invoice = $value;
        }
    }
    /**
     * The invoice item `id` (or invoice line item `id` for invoice line items of type='subscription') that the discount's coupon was applied to, if it was applied directly to a particular invoice item or invoice line item.
     */
    public ?string $invoice_item {
        set {
            $this->assigning('invoice_item', $value);
            $this->invoice_item = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Deleted\Discount\ObjectEnum $object_;
    /**
     * The promotion code applied to create this discount.
     */
    public ?\StripeSDK\DTOs\Deleted\Discount\PromotionCodeDTO $promotion_code;
    public \StripeSDK\DTOs\DiscountSource $source;
    /**
     * Date that the coupon was applied.
     * Format: unix-time
     */
    public int $start;
    /**
     * The subscription that this coupon is applied to, if it is applied to a particular subscription.
     */
    public ?string $subscription {
        set {
            $this->assigning('subscription', $value);
            $this->subscription = $value;
        }
    }
    /**
     * The subscription item that this coupon is applied to, if it is applied to a particular subscription item.
     */
    public ?string $subscription_item {
        set {
            $this->assigning('subscription_item', $value);
            $this->subscription_item = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'checkout_session' => $value === null || is_string($value) ? $this->checkout_session = $value : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'deleted' => is_bool($value) ? $this->deleted = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'invoice' => $value === null || is_string($value) ? $this->invoice = $value : parent::assignMember($name, $value),
            'invoice_item' => $value === null || is_string($value) ? $this->invoice_item = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Deleted\Discount\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'source' => $value instanceof \stdClass ? $this->source = new \StripeSDK\DTOs\DiscountSource($value) : parent::assignMember($name, $value),
            'start' => is_int($value) ? $this->start = $value : parent::assignMember($name, $value),
            'subscription' => $value === null || is_string($value) ? $this->subscription = $value : parent::assignMember($name, $value),
            'subscription_item' => $value === null || is_string($value) ? $this->subscription_item = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
