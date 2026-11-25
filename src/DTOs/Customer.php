<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Customer
 *
 * This object represents a customer of your business. Use it to [create recurring charges](https://docs.stripe.com/invoicing/customer), [save payment](https://docs.stripe.com/payments/save-during-payment) and contact information,
 * and track payments that belong to the same customer.
 */
final class Customer extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'livemode',
        'object_',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'business_name' => [
            'maxLength' => 150,
        ],
        'currency' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'email' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'individual_name' => [
            'maxLength' => 150,
        ],
        'invoice_prefix' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
        'phone' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The customer's billing address.
     */
    public ?\StripeSDK\DTOs\Address $address;
    /**
     * The current balance, if any, that's stored on the customer in their default currency. If negative, the customer has credit to apply to their next invoice. If positive, the customer has an amount owed that's added to their next invoice. The balance only considers amounts that Stripe hasn't successfully applied to any invoice. It doesn't reflect unpaid invoices. This balance is only taken into account after invoices finalize. For multi-currency balances, see [invoice_credit_balance](https://docs.stripe.com/api/customers/object#customer_object-invoice_credit_balance).
     */
    public int $balance;
    /**
     * The customer's business name.
     */
    public string $business_name {
        set {
            $this->assigning('business_name', $value);
            $this->business_name = $value;
        }
    }
    /**
     * The current funds being held by Stripe on behalf of the customer. You can apply these funds towards payment intents when the source is "cash_balance". The `settings[reconciliation_mode]` field describes if these funds apply to these payment intents manually or automatically.
     */
    public ?\StripeSDK\DTOs\CashBalance $cash_balance;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Three-letter [ISO code for the currency](https://stripe.com/docs/currencies) the customer can be charged in for recurring billing purposes.
     */
    public ?string $currency {
        set {
            $this->assigning('currency', $value);
            $this->currency = $value;
        }
    }
    /**
     * The ID of an Account representing a customer. You can use this ID with any v1 API that accepts a customer_account parameter.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * ID of the default payment source for the customer.
     *
     * If you use payment methods created through the PaymentMethods API, see the [invoice_settings.default_payment_method](https://docs.stripe.com/api/customers/object#customer_object-invoice_settings-default_payment_method) field instead.
     */
    public ?\StripeSDK\DTOs\Customer\DefaultSourceDTO $default_source;
    /**
     * Tracks the most recent state change on any invoice belonging to the customer. Paying an invoice or marking it uncollectible via the API will set this field to false. An automatic payment failure or passing the `invoice.due_date` will set this field to `true`.
     *
     * If an invoice becomes uncollectible by [dunning](https://docs.stripe.com/billing/automatic-collection), `delinquent` doesn't reset to `false`.
     *
     * If you care whether the customer has paid their most recent subscription invoice, use `subscription.status` instead. Paying or marking uncollectible any customer invoice regardless of whether it is the latest invoice for a subscription will always set this field to `false`.
     */
    public ?bool $delinquent;
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
     * Describes the current discount active on the customer, if there is one.
     */
    public ?\StripeSDK\DTOs\Discount $discount;
    /**
     * The customer's email address.
     */
    public ?string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
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
     * The customer's individual name.
     */
    public string $individual_name {
        set {
            $this->assigning('individual_name', $value);
            $this->individual_name = $value;
        }
    }
    /**
     * The current multi-currency balances, if any, that's stored on the customer. If positive in a currency, the customer has a credit to apply to their next invoice denominated in that currency. If negative, the customer has an amount owed that's added to their next invoice denominated in that currency. These balances don't apply to unpaid invoices. They solely track amounts that Stripe hasn't successfully applied to any invoice. Stripe only applies a balance in a specific currency to an invoice after that invoice (which is in the same currency) finalizes.
     */
    public \StripeSDK\DTOs\Customer\CreditBalanceMap $invoice_credit_balance;
    /**
     * The prefix for the customer used to generate unique invoice numbers.
     */
    public ?string $invoice_prefix {
        set {
            $this->assigning('invoice_prefix', $value);
            $this->invoice_prefix = $value;
        }
    }
    public \StripeSDK\DTOs\Invoice\SettingCustomerSetting $invoice_settings;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Customer\MetadataMap $metadata;
    /**
     * The customer's full name or business name.
     */
    public ?string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The suffix of the customer's next invoice number (for example, 0001). When the account uses account level sequencing, this parameter is ignored in API requests and the field omitted in API responses.
     */
    public int $next_invoice_sequence;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Customer\ObjectEnum $object_;
    /**
     * The customer's phone number.
     */
    public ?string $phone {
        set {
            $this->assigning('phone', $value);
            $this->phone = $value;
        }
    }
    /**
     * The customer's preferred locales (languages), ordered by preference.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $preferred_locales;
    /**
     * Mailing and shipping address for the customer. Appears on invoices emailed to this customer.
     */
    public ?\StripeSDK\DTOs\Shipping $shipping;
    /**
     * The customer's payment sources, if any.
     */
    public \StripeSDK\DTOs\Customer\SourcesDTO $sources;
    /**
     * The customer's current subscriptions, if any.
     */
    public \StripeSDK\DTOs\Customer\SubscriptionsDTO $subscriptions;
    public \StripeSDK\DTOs\Customer\Tax $tax;
    /**
     * Describes the customer's tax exemption status, which is `none`, `exempt`, or `reverse`. When set to `reverse`, invoice and receipt PDFs include the following text: **"Reverse charge"**.
     */
    public ?\StripeSDK\Enums\Customer\TaxExemptEnum $tax_exempt;
    /**
     * The customer's tax IDs.
     */
    public \StripeSDK\DTOs\Customer\TaxIdsDTO $tax_ids;
    /**
     * ID of the test clock that this customer belongs to.
     */
    public ?\StripeSDK\DTOs\Customer\TestClockDTO $test_clock;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value === null || $value instanceof \stdClass ? $this->address = $value === null ? null : new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'balance' => is_int($value) ? $this->balance = $value : parent::assignMember($name, $value),
            'business_name' => is_string($value) ? $this->business_name = $value : parent::assignMember($name, $value),
            'cash_balance' => $value === null || $value instanceof \stdClass ? $this->cash_balance = $value === null ? null : new \StripeSDK\DTOs\CashBalance($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => $value === null || is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'delinquent' => $value === null || is_bool($value) ? $this->delinquent = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'discount' => $value === null || $value instanceof \stdClass ? $this->discount = $value === null ? null : new \StripeSDK\DTOs\Discount($value) : parent::assignMember($name, $value),
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'individual_name' => is_string($value) ? $this->individual_name = $value : parent::assignMember($name, $value),
            'invoice_prefix' => $value === null || is_string($value) ? $this->invoice_prefix = $value : parent::assignMember($name, $value),
            'invoice_settings' => $value instanceof \stdClass ? $this->invoice_settings = new \StripeSDK\DTOs\Invoice\SettingCustomerSetting($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'next_invoice_sequence' => is_int($value) ? $this->next_invoice_sequence = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Customer\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'phone' => $value === null || is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'preferred_locales' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->preferred_locales = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'shipping' => $value === null || $value instanceof \stdClass ? $this->shipping = $value === null ? null : new \StripeSDK\DTOs\Shipping($value) : parent::assignMember($name, $value),
            'tax' => $value instanceof \stdClass ? $this->tax = new \StripeSDK\DTOs\Customer\Tax($value) : parent::assignMember($name, $value),
            'tax_exempt' => $value === null || is_string($value) ? $this->tax_exempt = $value === null ? null : \StripeSDK\Enums\Customer\TaxExemptEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
