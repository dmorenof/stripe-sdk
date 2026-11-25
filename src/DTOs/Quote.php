<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Quote
 *
 * A Quote is a way to model prices that you'd like to provide to a customer.
 * Once accepted, it will automatically create an invoice, subscription or subscription schedule.
 */
final class Quote extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_subtotal',
        'amount_total',
        'automatic_tax',
        'collection_method',
        'computed',
        'created',
        'discounts',
        'expires_at',
        'id',
        'invoice_settings',
        'livemode',
        'metadata',
        'object_',
        'status',
        'status_transitions',
        'subscription_data',
        'total_details',
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
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'footer' => [
            'maxLength' => 5000,
        ],
        'header' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'number' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Total before any discounts or taxes are applied.
     */
    public int $amount_subtotal;
    /**
     * Total after discounts and taxes are applied.
     */
    public int $amount_total;
    /**
     * ID of the Connect Application that created the quote.
     */
    public ?\StripeSDK\DTOs\Quote\ApplicationDTO $application;
    /**
     * The amount of the application fee (if any) that will be requested to be applied to the payment and transferred to the application owner's Stripe account. Only applicable if there are no line items with recurring prices on the quote.
     */
    public ?int $application_fee_amount;
    /**
     * A non-negative decimal between 0 and 100, with at most two decimal places. This represents the percentage of the subscription invoice total that will be transferred to the application owner's Stripe account. Only applicable if there are line items with recurring prices on the quote.
     */
    public ?float $application_fee_percent;
    public \StripeSDK\DTOs\QuotesResource\AutomaticTax $automatic_tax;
    /**
     * Either `charge_automatically`, or `send_invoice`. When charging automatically, Stripe will attempt to pay invoices at the end of the subscription cycle or on finalization using the default payment method attached to the subscription or customer. When sending an invoice, Stripe will email your customer an invoice with payment instructions and mark the subscription as `active`. Defaults to `charge_automatically`.
     */
    public \StripeSDK\Enums\Quote\CollectionMethodEnum $collection_method;
    public \StripeSDK\DTOs\QuotesResource\Computed $computed;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     */
    public ?string $currency {
        set {
            $this->assigning('currency', $value);
            $this->currency = $value;
        }
    }
    /**
     * The customer who received this quote. A customer is required to finalize the quote. Once specified, you can't change it.
     */
    public ?\StripeSDK\DTOs\Quote\CustomerDTO $customer;
    /**
     * The account representing the customer who received this quote. A customer or account is required to finalize the quote. Once specified, you can't change it.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * The tax rates applied to this quote.
     */
    public \StripeSDK\Collections\Quote\TaxRatesCollection $default_tax_rates;
    /**
     * A description that will be displayed on the quote PDF.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The discounts applied to this quote.
     */
    public \StripeSDK\Collections\Quote\DiscountsCollection $discounts;
    /**
     * The date on which the quote will be canceled if in `open` or `draft` status. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $expires_at;
    /**
     * A footer that will be displayed on the quote PDF.
     */
    public ?string $footer {
        set {
            $this->assigning('footer', $value);
            $this->footer = $value;
        }
    }
    /**
     * Details of the quote that was cloned. See the [cloning documentation](https://docs.stripe.com/quotes/clone) for more details.
     */
    public ?\StripeSDK\DTOs\QuotesResource\FromQuote $from_quote;
    /**
     * A header that will be displayed on the quote PDF.
     */
    public ?string $header {
        set {
            $this->assigning('header', $value);
            $this->header = $value;
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
     * The invoice that was created from this quote.
     */
    public ?\StripeSDK\DTOs\Quote\InvoiceDTO $invoice;
    public \StripeSDK\DTOs\Invoice\SettingQuoteSetting $invoice_settings;
    /**
     * A list of items the customer is being quoted for.
     */
    public \StripeSDK\DTOs\Quote\LineItemsDTO $line_items;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Quote\MetadataMap $metadata;
    /**
     * A unique number that identifies this particular quote. This number is assigned once the quote is [finalized](https://docs.stripe.com/quotes/overview#finalize).
     */
    public ?string $number {
        set {
            $this->assigning('number', $value);
            $this->number = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Quote\ObjectEnum $object_;
    /**
     * The account on behalf of which to charge. See the [Connect documentation](https://support.stripe.com/questions/sending-invoices-on-behalf-of-connected-accounts) for details.
     */
    public ?\StripeSDK\DTOs\Quote\OnBehalfDTO $on_behalf_of;
    /**
     * The status of the quote.
     */
    public \StripeSDK\Enums\Quote\StatusEnum $status;
    public \StripeSDK\DTOs\QuotesResource\StatusTransitions $status_transitions;
    /**
     * The subscription that was created or updated from this quote.
     */
    public ?\StripeSDK\DTOs\Quote\SubscriptionDTO $subscription;
    public \StripeSDK\DTOs\QuotesResource\SubscriptionDataSubscriptionData $subscription_data;
    /**
     * The subscription schedule that was created or updated from this quote.
     */
    public ?\StripeSDK\DTOs\Quote\SubscriptionScheduleDTO $subscription_schedule;
    /**
     * ID of the test clock this quote belongs to.
     */
    public ?\StripeSDK\DTOs\Quote\TestClockDTO $test_clock;
    public \StripeSDK\DTOs\QuotesResource\TotalDetails $total_details;
    /**
     * The account (if any) the payments will be attributed to for tax reporting, and where funds from each payment will be transferred to for each of the invoices.
     */
    public ?\StripeSDK\DTOs\QuotesResource\TransferData $transfer_data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_subtotal' => is_int($value) ? $this->amount_subtotal = $value : parent::assignMember($name, $value),
            'amount_total' => is_int($value) ? $this->amount_total = $value : parent::assignMember($name, $value),
            'application_fee_amount' => $value === null || is_int($value) ? $this->application_fee_amount = $value : parent::assignMember($name, $value),
            'application_fee_percent' => $value === null || is_float($value) ? $this->application_fee_percent = $value : parent::assignMember($name, $value),
            'automatic_tax' => $value instanceof \stdClass ? $this->automatic_tax = new \StripeSDK\DTOs\QuotesResource\AutomaticTax($value) : parent::assignMember($name, $value),
            'collection_method' => is_string($value) ? $this->collection_method = \StripeSDK\Enums\Quote\CollectionMethodEnum::from($value) : parent::assignMember($name, $value),
            'computed' => $value instanceof \stdClass ? $this->computed = new \StripeSDK\DTOs\QuotesResource\Computed($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => $value === null || is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'footer' => $value === null || is_string($value) ? $this->footer = $value : parent::assignMember($name, $value),
            'from_quote' => $value === null || $value instanceof \stdClass ? $this->from_quote = $value === null ? null : new \StripeSDK\DTOs\QuotesResource\FromQuote($value) : parent::assignMember($name, $value),
            'header' => $value === null || is_string($value) ? $this->header = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'invoice_settings' => $value instanceof \stdClass ? $this->invoice_settings = new \StripeSDK\DTOs\Invoice\SettingQuoteSetting($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'number' => $value === null || is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Quote\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Quote\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_transitions' => $value instanceof \stdClass ? $this->status_transitions = new \StripeSDK\DTOs\QuotesResource\StatusTransitions($value) : parent::assignMember($name, $value),
            'subscription_data' => $value instanceof \stdClass ? $this->subscription_data = new \StripeSDK\DTOs\QuotesResource\SubscriptionDataSubscriptionData($value) : parent::assignMember($name, $value),
            'total_details' => $value instanceof \stdClass ? $this->total_details = new \StripeSDK\DTOs\QuotesResource\TotalDetails($value) : parent::assignMember($name, $value),
            'transfer_data' => $value === null || $value instanceof \stdClass ? $this->transfer_data = $value === null ? null : new \StripeSDK\DTOs\QuotesResource\TransferData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
