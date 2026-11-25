<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Credit;

/**
 * Credit Note Line Item
 *
 * The credit note line item object
 */
final class NoteLineItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'discount_amount',
        'discount_amounts',
        'id',
        'livemode',
        'object_',
        'pretax_credit_amounts',
        'tax_rates',
        'type',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'invoice_line_item' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The integer amount in cents (or local equivalent) representing the gross amount being credited for this line item, excluding (exclusive) tax and discounts.
     */
    public int $amount;
    /**
     * Description of the item being credited.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The integer amount in cents (or local equivalent) representing the discount being credited for this line item.
     */
    public int $discount_amount;
    /**
     * The amount of discount calculated per discount for this line item
     */
    public \StripeSDK\Collections\Credit\Note\DiscountAmountsCollection $discount_amounts;
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
     * ID of the invoice line item being credited
     */
    public string $invoice_line_item {
        set {
            $this->assigning('invoice_line_item', $value);
            $this->invoice_line_item = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Credit\NoteLineItem\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Credit\NoteLineItem\ObjectEnum $object_;
    /**
     * The pretax credit amounts (ex: discount, credit grants, etc) for this line item.
     */
    public \StripeSDK\Collections\Credit\Note\CreditAmountsCollection $pretax_credit_amounts;
    /**
     * The number of units of product being credited.
     */
    public ?int $quantity;
    /**
     * The tax rates which apply to the line item.
     */
    public \StripeSDK\Collections\Credit\NoteLineItem\TaxRatesCollection $tax_rates;
    /**
     * The tax information of the line item.
     */
    public ?\StripeSDK\Collections\Credit\Note\TotalTaxesCollection $taxes;
    /**
     * The type of the credit note line item, one of `invoice_line_item` or `custom_line_item`. When the type is `invoice_line_item` there is an additional `invoice_line_item` property on the resource the value of which is the id of the credited line item on the invoice.
     */
    public \StripeSDK\Enums\Credit\NoteLineItem\TypeEnum $type;
    /**
     * The cost of each unit of product being credited.
     */
    public ?int $unit_amount;
    /**
     * Same as `unit_amount`, but contains a decimal value with at most 12 decimal places.
     * Format: decimal
     */
    public ?string $unit_amount_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'discount_amount' => is_int($value) ? $this->discount_amount = $value : parent::assignMember($name, $value),
            'discount_amounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->discount_amounts = new \StripeSDK\Collections\Credit\Note\DiscountAmountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\DiscountsResourceDiscountAmount::class)) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'invoice_line_item' => is_string($value) ? $this->invoice_line_item = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Credit\NoteLineItem\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'pretax_credit_amounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->pretax_credit_amounts = new \StripeSDK\Collections\Credit\Note\CreditAmountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Credit\NotesPretaxCreditAmount::class)) : parent::assignMember($name, $value),
            'quantity' => $value === null || is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'tax_rates' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->tax_rates = new \StripeSDK\Collections\Credit\NoteLineItem\TaxRatesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\TaxRate::class)) : parent::assignMember($name, $value),
            'taxes' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->taxes = $value === null ? null : new \StripeSDK\Collections\Credit\Note\TotalTaxesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Billing\BillResourceInvoicingTaxesTax::class)) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Credit\NoteLineItem\TypeEnum::from($value) : parent::assignMember($name, $value),
            'unit_amount' => $value === null || is_int($value) ? $this->unit_amount = $value : parent::assignMember($name, $value),
            'unit_amount_decimal' => $value === null || is_string($value) ? $this->unit_amount_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
