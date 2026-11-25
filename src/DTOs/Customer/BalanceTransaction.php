<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * Customer Balance Transaction
 *
 * Each customer has a [Balance](https://docs.stripe.com/api/customers/object#customer_object-balance) value,
 * which denotes a debit or credit that's automatically applied to their next invoice upon finalization.
 * You may modify the value directly by using the [update customer API](https://docs.stripe.com/api/customers/update),
 * or by creating a Customer Balance Transaction, which increments or decrements the customer's `balance` by the specified `amount`.
 *
 * Related guide: [Customer balance](https://docs.stripe.com/billing/customer/balance)
 */
final class BalanceTransaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'created',
        'currency',
        'customer',
        'ending_balance',
        'id',
        'livemode',
        'object_',
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
        'description' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The amount of the transaction. A negative value is a credit for the customer's balance, and a positive value is a debit to the customer's `balance`.
     */
    public int $amount;
    /**
     * The ID of the checkout session (if any) that created the transaction.
     */
    public ?\StripeSDK\DTOs\Customer\BalanceTransaction\CheckoutSessionDTO $checkout_session;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The ID of the credit note (if any) related to the transaction.
     */
    public ?\StripeSDK\DTOs\Customer\BalanceTransaction\CreditNoteDTO $credit_note;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * The ID of the customer the transaction belongs to.
     */
    public \StripeSDK\DTOs\Customer\BalanceTransaction\CustomerDTO $customer;
    /**
     * The ID of an Account representing a customer that the transaction belongs to.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
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
     * The customer's `balance` after the transaction was applied. A negative value decreases the amount due on the customer's next invoice. A positive value increases the amount due on the customer's next invoice.
     */
    public int $ending_balance;
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
     * The ID of the invoice (if any) related to the transaction.
     */
    public ?\StripeSDK\DTOs\Customer\BalanceTransaction\InvoiceDTO $invoice;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Customer\BalanceTransaction\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Customer\BalanceTransaction\ObjectEnum $object_;
    /**
     * Transaction type: `adjustment`, `applied_to_invoice`, `credit_note`, `initial`, `invoice_overpaid`, `invoice_too_large`, `invoice_too_small`, `unspent_receiver_credit`, `unapplied_from_invoice`, `checkout_session_subscription_payment`, or `checkout_session_subscription_payment_canceled`. See the [Customer Balance page](https://docs.stripe.com/billing/customer/balance#types) to learn more about transaction types.
     */
    public \StripeSDK\Enums\Customer\BalanceTransaction\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'ending_balance' => is_int($value) ? $this->ending_balance = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Customer\BalanceTransaction\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Customer\BalanceTransaction\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
