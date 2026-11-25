<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Invoice Item
 *
 * Invoice Items represent the component lines of an [invoice](https://docs.stripe.com/api/invoices). When you create an invoice item with an `invoice` field, it is attached to the specified invoice and included as [an invoice line item](https://docs.stripe.com/api/invoices/line_item) within [invoice.lines](https://docs.stripe.com/api/invoices/object#invoice_object-lines).
 *
 * Invoice Items can be created before you are ready to actually send the invoice. This can be particularly useful when combined
 * with a [subscription](https://docs.stripe.com/api/subscriptions). Sometimes you want to add a charge or credit to a customer, but actually charge
 * or credit the customer's card only at the end of a regular billing cycle. This is useful for combining several charges
 * (to minimize per-transaction fees), or for having Stripe tabulate your usage-based billing totals.
 *
 * Related guides: [Integrate with the Invoicing API](https://docs.stripe.com/invoicing/integration), [Subscription Invoices](https://docs.stripe.com/billing/invoices/subscription#adding-upcoming-invoice-items).
 */
final class Invoiceitem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
        'customer',
        'date',
        'discountable',
        'id',
        'livemode',
        'object_',
        'period',
        'proration',
        'quantity',
        'quantity_decimal',
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
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount (in the `currency` specified) of the invoice item. This should always be equal to `unit_amount * quantity`.
     */
    public int $amount;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * The ID of the customer to bill for this invoice item.
     */
    public \StripeSDK\DTOs\Invoiceitem\CustomerDTO $customer;
    /**
     * The ID of the account to bill for this invoice item.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $date;
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
     * If true, discounts will apply to this invoice item. Always false for prorations.
     */
    public bool $discountable;
    /**
     * The discounts which apply to the invoice item. Item discounts are applied before invoice discounts. Use `expand[]=discounts` to expand each discount.
     */
    public ?\StripeSDK\Collections\Invoiceitem\DiscountsCollection $discounts;
    /**
     * Array of field names that can't be modified. Attempting to update a frozen field returns an error.
     */
    public \StripeSDK\Collections\Invoiceitem\FrozenFieldsCollection $frozen_fields;
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
     * The ID of the invoice this invoice item belongs to.
     */
    public ?\StripeSDK\DTOs\Invoiceitem\InvoiceDTO $invoice;
    /**
     * The rules that control when this invoice item is eligible for invoicing. All rules must be satisfied for the item to be invoiced.
     */
    public \StripeSDK\Collections\Invoiceitem\InvoicingRulesCollection $invoicing_rules;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Invoiceitem\MetadataMap $metadata;
    /**
     * The amount after discounts, but before credits and taxes. This field is `null` for `discountable=true` items.
     */
    public int $net_amount;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Invoiceitem\ObjectEnum $object_;
    /**
     * The parent that generated this invoice item.
     */
    public ?\StripeSDK\DTOs\Billing\BillResourceInvoiceItemParentsInvoiceItemParent $parent_;
    public \StripeSDK\DTOs\Invoice\LineItemPeriod $period;
    /**
     * The pricing information of the invoice item.
     */
    public ?\StripeSDK\DTOs\Billing\BillResourceInvoicingPricingPricing $pricing;
    /**
     * Whether the invoice item was created automatically as a proration adjustment when the customer switched plans.
     */
    public bool $proration;
    public \StripeSDK\DTOs\ProrationDetails $proration_details;
    /**
     * Quantity of units for the invoice item in integer format, with any decimal precision truncated. For the item's full-precision decimal quantity, use `quantity_decimal`. This field will be deprecated in favor of `quantity_decimal` in a future version. If the invoice item is a proration, the quantity of the subscription that the proration was computed for.
     */
    public int $quantity;
    /**
     * Non-negative decimal with at most 12 decimal places. The quantity of units for the invoice item.
     * Format: decimal
     */
    public string $quantity_decimal;
    /**
     * The tax rates which apply to the invoice item. When set, the `default_tax_rates` on the invoice do not apply to this invoice item.
     */
    public ?\StripeSDK\Collections\Credit\NoteLineItem\TaxRatesCollection $tax_rates;
    /**
     * ID of the test clock this invoice item belongs to.
     */
    public ?\StripeSDK\DTOs\Invoiceitem\TestClockDTO $test_clock;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'date' => is_int($value) ? $this->date = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'discountable' => is_bool($value) ? $this->discountable = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'invoicing_rules' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->invoicing_rules = new \StripeSDK\Collections\Invoiceitem\InvoicingRulesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\InvoicingRule::class)) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'net_amount' => is_int($value) ? $this->net_amount = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Invoiceitem\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'parent' => $value === null || $value instanceof \stdClass ? $this->parent_ = $value === null ? null : new \StripeSDK\DTOs\Billing\BillResourceInvoiceItemParentsInvoiceItemParent($value) : parent::assignMember($name, $value),
            'period' => $value instanceof \stdClass ? $this->period = new \StripeSDK\DTOs\Invoice\LineItemPeriod($value) : parent::assignMember($name, $value),
            'pricing' => $value === null || $value instanceof \stdClass ? $this->pricing = $value === null ? null : new \StripeSDK\DTOs\Billing\BillResourceInvoicingPricingPricing($value) : parent::assignMember($name, $value),
            'proration' => is_bool($value) ? $this->proration = $value : parent::assignMember($name, $value),
            'proration_details' => $value instanceof \stdClass ? $this->proration_details = new \StripeSDK\DTOs\ProrationDetails($value) : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'quantity_decimal' => is_string($value) ? $this->quantity_decimal = $value : parent::assignMember($name, $value),
            'tax_rates' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->tax_rates = $value === null ? null : new \StripeSDK\Collections\Credit\NoteLineItem\TaxRatesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\TaxRate::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
