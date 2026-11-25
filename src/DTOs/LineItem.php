<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Invoice Line Item
 *
 * Invoice Line Items represent the individual lines within an [invoice](https://docs.stripe.com/api/invoices) and only exist within the context of an invoice.
 *
 * Each line item is backed by either an [invoice item](https://docs.stripe.com/api/invoiceitems) or a [subscription item](https://docs.stripe.com/api/subscription_items).
 */
final class LineItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
        'discountable',
        'discounts',
        'id',
        'livemode',
        'metadata',
        'object_',
        'period',
        'subtotal',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
        'parent' => 'parent_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
        'parent_' => 'parent',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'invoice' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The amount, in cents (or local equivalent).
     */
    public int $amount;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * An arbitrary string attached to the object. Often useful for displaying to users.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The amount of discount calculated per discount for this line item.
     */
    public ?\StripeSDK\Collections\Credit\Note\DiscountAmountsCollection $discount_amounts;
    /**
     * If true, discounts will apply to this line item. Always false for prorations.
     */
    public bool $discountable;
    /**
     * The discounts applied to the invoice line item. Line item discounts are applied before invoice discounts. Use `expand[]=discounts` to expand each discount.
     */
    public \StripeSDK\Collections\LineItem\DiscountsCollection $discounts;
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
     * The ID of the invoice that contains this line item.
     */
    public ?string $invoice {
        set {
            $this->assigning('invoice', $value);
            $this->invoice = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Note that for line items with `type=subscription`, `metadata` reflects the current metadata from the subscription associated with the line item, unless the invoice line was directly updated with different metadata after creation.
     */
    public \StripeSDK\DTOs\LineItem\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\LineItem\ObjectEnum $object_;
    /**
     * The parent that generated this line item.
     */
    public ?\StripeSDK\DTOs\Billing\BillResourceInvoicingLinesParentsInvoiceLineItemParent $parent_;
    public \StripeSDK\DTOs\Invoice\LineItemPeriod $period;
    /**
     * Contains pretax credit amounts (ex: discount, credit grants, etc) that apply to this line item.
     */
    public ?\StripeSDK\Collections\Invoice\CreditAmountsCollection $pretax_credit_amounts;
    /**
     * The pricing information of the line item.
     */
    public ?\StripeSDK\DTOs\Billing\BillResourceInvoicingPricingPricing $pricing;
    /**
     * Quantity of units for the invoice line item in integer format, with any decimal precision truncated. For the line item's full-precision decimal quantity, use `quantity_decimal`. This field will be deprecated in favor of `quantity_decimal` in a future version. If the line item is a proration or subscription, the quantity of the subscription that the proration was computed for.
     */
    public ?int $quantity;
    /**
     * Non-negative decimal with at most 12 decimal places. The quantity of units for the line item.
     * Format: decimal
     */
    public ?string $quantity_decimal;
    public ?\StripeSDK\DTOs\LineItem\SubscriptionDTO $subscription;
    /**
     * The subtotal of the line item, in cents (or local equivalent), before any discounts or taxes.
     */
    public int $subtotal;
    /**
     * The tax information of the line item.
     */
    public ?\StripeSDK\Collections\Credit\Note\TotalTaxesCollection $taxes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'discount_amounts' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->discount_amounts = $value === null ? null : new \StripeSDK\Collections\Credit\Note\DiscountAmountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\DiscountsResourceDiscountAmount::class)) : parent::assignMember($name, $value),
            'discountable' => is_bool($value) ? $this->discountable = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'invoice' => $value === null || is_string($value) ? $this->invoice = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\LineItem\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'parent' => $value === null || $value instanceof \stdClass ? $this->parent_ = $value === null ? null : new \StripeSDK\DTOs\Billing\BillResourceInvoicingLinesParentsInvoiceLineItemParent($value) : parent::assignMember($name, $value),
            'period' => $value instanceof \stdClass ? $this->period = new \StripeSDK\DTOs\Invoice\LineItemPeriod($value) : parent::assignMember($name, $value),
            'pretax_credit_amounts' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->pretax_credit_amounts = $value === null ? null : new \StripeSDK\Collections\Invoice\CreditAmountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\InvoicesResource\PretaxCreditAmount::class)) : parent::assignMember($name, $value),
            'pricing' => $value === null || $value instanceof \stdClass ? $this->pricing = $value === null ? null : new \StripeSDK\DTOs\Billing\BillResourceInvoicingPricingPricing($value) : parent::assignMember($name, $value),
            'quantity' => $value === null || is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'quantity_decimal' => $value === null || is_string($value) ? $this->quantity_decimal = $value : parent::assignMember($name, $value),
            'subtotal' => is_int($value) ? $this->subtotal = $value : parent::assignMember($name, $value),
            'taxes' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->taxes = $value === null ? null : new \StripeSDK\Collections\Credit\Note\TotalTaxesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Billing\BillResourceInvoicingTaxesTax::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
