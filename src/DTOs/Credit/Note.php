<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Credit;

/**
 * Credit Note
 *
 * Issue a credit note to adjust an invoice's amount after the invoice is finalized.
 *
 * Related guide: [Credit notes](https://docs.stripe.com/billing/invoices/credit-notes)
 */
final class Note extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'amount_shipping',
        'created',
        'currency',
        'customer',
        'discount_amount',
        'discount_amounts',
        'id',
        'invoice',
        'lines',
        'livemode',
        'number',
        'object_',
        'pdf',
        'post_payment_amount',
        'pre_payment_amount',
        'pretax_credit_amounts',
        'refunds',
        'status',
        'subtotal',
        'total',
        'type',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'memo' => [
            'maxLength' => 5000,
        ],
        'number' => [
            'maxLength' => 5000,
        ],
        'pdf' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The integer amount in cents (or local equivalent) representing the total amount of the credit note, including tax.
     */
    public int $amount;
    /**
     * This is the sum of all the shipping amounts.
     */
    public int $amount_shipping;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * ID of the customer.
     */
    public \StripeSDK\DTOs\Credit\Note\CustomerDTO $customer;
    /**
     * ID of the account representing the customer.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * Customer balance transaction related to this credit note.
     */
    public ?\StripeSDK\DTOs\Credit\Note\BalanceTransactionDTO $customer_balance_transaction;
    /**
     * The integer amount in cents (or local equivalent) representing the total amount of discount that was credited.
     */
    public int $discount_amount;
    /**
     * The aggregate amounts calculated per discount for all line items.
     */
    public \StripeSDK\Collections\Credit\Note\DiscountAmountsCollection $discount_amounts;
    /**
     * The date when this credit note is in effect. Same as `created` unless overwritten. When defined, this value replaces the system-generated 'Date of issue' printed on the credit note PDF.
     * Format: unix-time
     */
    public ?int $effective_at;
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
     * ID of the invoice.
     */
    public \StripeSDK\DTOs\Credit\Note\InvoiceDTO $invoice;
    /**
     * Line items that make up the credit note
     */
    public \StripeSDK\DTOs\Credit\Note\LinesDTO $lines;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Customer-facing text that appears on the credit note PDF.
     */
    public ?string $memo {
        set {
            $this->assigning('memo', $value);
            $this->memo = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Credit\Note\MetadataMap $metadata;
    /**
     * A unique number that identifies this particular credit note and appears on the PDF of the credit note and its associated invoice.
     */
    public string $number {
        set {
            $this->assigning('number', $value);
            $this->number = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Credit\Note\ObjectEnum $object_;
    /**
     * Amount that was credited outside of Stripe.
     */
    public ?int $out_of_band_amount;
    /**
     * The link to download the PDF of the credit note.
     */
    public string $pdf {
        set {
            $this->assigning('pdf', $value);
            $this->pdf = $value;
        }
    }
    /**
     * The amount of the credit note that was refunded to the customer, credited to the customer's balance, credited outside of Stripe, or any combination thereof.
     */
    public int $post_payment_amount;
    /**
     * The amount of the credit note by which the invoice's `amount_remaining` and `amount_due` were reduced.
     */
    public int $pre_payment_amount;
    /**
     * The pretax credit amounts (ex: discount, credit grants, etc) for all line items.
     */
    public \StripeSDK\Collections\Credit\Note\CreditAmountsCollection $pretax_credit_amounts;
    /**
     * Reason for issuing this credit note, one of `duplicate`, `fraudulent`, `order_change`, or `product_unsatisfactory`
     */
    public ?\StripeSDK\Enums\Credit\Note\ReasonEnum $reason;
    /**
     * Refunds related to this credit note.
     */
    public \StripeSDK\Collections\Credit\Note\RefundsCollection $refunds;
    /**
     * The details of the cost of shipping, including the ShippingRate applied to the invoice.
     */
    public ?\StripeSDK\DTOs\InvoicesResource\ShippingCost $shipping_cost;
    /**
     * Status of this credit note, one of `issued` or `void`. Learn more about [voiding credit notes](https://docs.stripe.com/billing/invoices/credit-notes#voiding).
     */
    public \StripeSDK\Enums\Credit\Note\StatusEnum $status;
    /**
     * The integer amount in cents (or local equivalent) representing the amount of the credit note, excluding exclusive tax and invoice level discounts.
     */
    public int $subtotal;
    /**
     * The integer amount in cents (or local equivalent) representing the amount of the credit note, excluding all tax and invoice level discounts.
     */
    public ?int $subtotal_excluding_tax;
    /**
     * The integer amount in cents (or local equivalent) representing the total amount of the credit note, including tax and all discount.
     */
    public int $total;
    /**
     * The integer amount in cents (or local equivalent) representing the total amount of the credit note, excluding tax, but including discounts.
     */
    public ?int $total_excluding_tax;
    /**
     * The aggregate tax information for all line items.
     */
    public ?\StripeSDK\Collections\Credit\Note\TotalTaxesCollection $total_taxes;
    /**
     * Type of this credit note, one of `pre_payment` or `post_payment`. A `pre_payment` credit note means it was issued when the invoice was open. A `post_payment` credit note means it was issued when the invoice was paid.
     */
    public \StripeSDK\Enums\Credit\Note\TypeEnum $type;
    /**
     * The time that the credit note was voided.
     * Format: unix-time
     */
    public ?int $voided_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'amount_shipping' => is_int($value) ? $this->amount_shipping = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'discount_amount' => is_int($value) ? $this->discount_amount = $value : parent::assignMember($name, $value),
            'discount_amounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->discount_amounts = new \StripeSDK\Collections\Credit\Note\DiscountAmountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\DiscountsResourceDiscountAmount::class)) : parent::assignMember($name, $value),
            'effective_at' => $value === null || is_int($value) ? $this->effective_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'memo' => $value === null || is_string($value) ? $this->memo = $value : parent::assignMember($name, $value),
            'number' => is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Credit\Note\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'out_of_band_amount' => $value === null || is_int($value) ? $this->out_of_band_amount = $value : parent::assignMember($name, $value),
            'pdf' => is_string($value) ? $this->pdf = $value : parent::assignMember($name, $value),
            'post_payment_amount' => is_int($value) ? $this->post_payment_amount = $value : parent::assignMember($name, $value),
            'pre_payment_amount' => is_int($value) ? $this->pre_payment_amount = $value : parent::assignMember($name, $value),
            'pretax_credit_amounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->pretax_credit_amounts = new \StripeSDK\Collections\Credit\Note\CreditAmountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Credit\NotesPretaxCreditAmount::class)) : parent::assignMember($name, $value),
            'reason' => $value === null || is_string($value) ? $this->reason = $value === null ? null : \StripeSDK\Enums\Credit\Note\ReasonEnum::from($value) : parent::assignMember($name, $value),
            'refunds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->refunds = new \StripeSDK\Collections\Credit\Note\RefundsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Credit\NoteRefund::class)) : parent::assignMember($name, $value),
            'shipping_cost' => $value === null || $value instanceof \stdClass ? $this->shipping_cost = $value === null ? null : new \StripeSDK\DTOs\InvoicesResource\ShippingCost($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Credit\Note\StatusEnum::from($value) : parent::assignMember($name, $value),
            'subtotal' => is_int($value) ? $this->subtotal = $value : parent::assignMember($name, $value),
            'subtotal_excluding_tax' => $value === null || is_int($value) ? $this->subtotal_excluding_tax = $value : parent::assignMember($name, $value),
            'total' => is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            'total_excluding_tax' => $value === null || is_int($value) ? $this->total_excluding_tax = $value : parent::assignMember($name, $value),
            'total_taxes' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->total_taxes = $value === null ? null : new \StripeSDK\Collections\Credit\Note\TotalTaxesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Billing\BillResourceInvoicingTaxesTax::class)) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Credit\Note\TypeEnum::from($value) : parent::assignMember($name, $value),
            'voided_at' => $value === null || is_int($value) ? $this->voided_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
