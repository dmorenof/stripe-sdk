<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\CreditNotes;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'invoice',
    ];

    protected const array VALIDATION = [
        'invoice' => [
            'maxLength' => 5000,
        ],
        'memo' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The integer amount in cents (or local equivalent) representing the total amount of the credit note. One of `amount`, `lines`, or `shipping_cost` must be provided.
     */
    public int $amount;
    /**
     * The integer amount in cents (or local equivalent) representing the amount to credit the customer's balance, which will be automatically applied to their next invoice.
     */
    public int $credit_amount;
    /**
     * The date when this credit note is in effect. Same as `created` unless overwritten. When defined, this value replaces the system-generated 'Date of issue' printed on the credit note PDF.
     * Format: unix-time
     */
    public int $effective_at;
    /**
     * Type of email to send to the customer, one of `credit_note` or `none` and the default is `credit_note`.
     */
    public \StripeSDK\Enums\V1\CreditNotes\Post\EmailTypeEnum $email_type;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * ID of the invoice.
     */
    public string $invoice {
        set {
            $this->assigning('invoice', $value);
            $this->invoice = $value;
        }
    }
    /**
     * Line items that make up the credit note. One of `amount`, `lines`, or `shipping_cost` must be provided.
     */
    public \StripeSDK\Collections\V1\CreditNotes\Post\CreditNotesLinesCollection $lines;
    /**
     * The credit note's memo appears on the credit note PDF.
     */
    public string $memo {
        set {
            $this->assigning('memo', $value);
            $this->memo = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\CreditNotes\Post\MetadataMapRequest $metadata;
    /**
     * The integer amount in cents (or local equivalent) representing the amount that is credited outside of Stripe.
     */
    public int $out_of_band_amount;
    /**
     * Reason for issuing this credit note, one of `duplicate`, `fraudulent`, `order_change`, or `product_unsatisfactory`
     */
    public \StripeSDK\Enums\V1\CreditNotes\Post\CreditNotesReasonEnum $reason;
    /**
     * The integer amount in cents (or local equivalent) representing the amount to refund. If set, a refund will be created for the charge associated with the invoice.
     */
    public int $refund_amount;
    /**
     * Refunds to link to this credit note.
     */
    public \StripeSDK\Collections\V1\CreditNotes\Post\CreditNotesRefundsCollection $refunds;
    /**
     * When shipping_cost contains the shipping_rate from the invoice, the shipping_cost is included in the credit note. One of `amount`, `lines`, or `shipping_cost` must be provided.
     */
    public \StripeSDK\Requests\V1\CreditNotes\Post\ShippingCostRequest $shipping_cost;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'credit_amount' => is_int($value) ? $this->credit_amount = $value : parent::assignMember($name, $value),
            'effective_at' => is_int($value) ? $this->effective_at = $value : parent::assignMember($name, $value),
            'email_type' => is_string($value) ? $this->email_type = \StripeSDK\Enums\V1\CreditNotes\Post\EmailTypeEnum::from($value) : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'invoice' => is_string($value) ? $this->invoice = $value : parent::assignMember($name, $value),
            'memo' => is_string($value) ? $this->memo = $value : parent::assignMember($name, $value),
            'out_of_band_amount' => is_int($value) ? $this->out_of_band_amount = $value : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = \StripeSDK\Enums\V1\CreditNotes\Post\CreditNotesReasonEnum::from($value) : parent::assignMember($name, $value),
            'refund_amount' => is_int($value) ? $this->refund_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
