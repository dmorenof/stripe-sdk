<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Invoice;

/**
 * Invoice Payment
 *
 * Invoice Payments represent payments made against invoices. Invoice Payments can
 * be accessed in two ways:
 * 1. By expanding the `payments` field on the [Invoice](https://docs.stripe.com/api#invoice) resource.
 * 2. By using the Invoice Payment retrieve and list endpoints.
 *
 * Invoice Payments include the mapping between payment objects, such as Payment Intent, and Invoices.
 * This resource and its endpoints allows you to easily track if a payment is associated with a specific invoice and
 * monitor the allocation details of the payments.
 */
final class Payment extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_requested',
        'created',
        'currency',
        'id',
        'invoice',
        'is_default',
        'livemode',
        'object_',
        'payment',
        'status',
        'status_transitions',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'currency' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'status' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount that was actually paid for this invoice, in cents (or local equivalent). This field is null until the payment is `paid`. This amount can be less than the `amount_requested` if the PaymentIntent’s `amount_received` is not sufficient to pay all of the invoices that it is attached to.
     */
    public ?int $amount_paid;
    /**
     * Amount intended to be paid toward this invoice, in cents (or local equivalent)
     */
    public int $amount_requested;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     */
    public string $currency {
        set {
            $this->assigning('currency', $value);
            $this->currency = $value;
        }
    }
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
     * The invoice that was paid.
     */
    public \StripeSDK\DTOs\Invoice\Payment\InvoiceDTO $invoice;
    /**
     * Stripe automatically creates a default InvoicePayment when the invoice is finalized, and keeps it synchronized with the invoice’s `amount_remaining`. The PaymentIntent associated with the default payment can’t be edited or canceled directly.
     */
    public bool $is_default;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Invoice\Payment\ObjectEnum $object_;
    public \StripeSDK\DTOs\InvoicesPaymentsInvoicePaymentAssociatedPayment $payment;
    /**
     * The status of the payment, one of `open`, `paid`, or `canceled`.
     */
    public string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    public \StripeSDK\DTOs\InvoicesPaymentsInvoicePaymentStatusTransitions $status_transitions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_paid' => $value === null || is_int($value) ? $this->amount_paid = $value : parent::assignMember($name, $value),
            'amount_requested' => is_int($value) ? $this->amount_requested = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'is_default' => is_bool($value) ? $this->is_default = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Invoice\Payment\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'payment' => $value instanceof \stdClass ? $this->payment = new \StripeSDK\DTOs\InvoicesPaymentsInvoicePaymentAssociatedPayment($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'status_transitions' => $value instanceof \stdClass ? $this->status_transitions = new \StripeSDK\DTOs\InvoicesPaymentsInvoicePaymentStatusTransitions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
