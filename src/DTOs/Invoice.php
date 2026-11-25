<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Invoice
 *
 * Invoices are statements of amounts owed by a customer, and are either
 * generated one-off, or generated periodically from a subscription.
 *
 * They contain [invoice items](https://docs.stripe.com/api#invoiceitems), and proration adjustments
 * that may be caused by subscription upgrades/downgrades (if necessary).
 *
 * If your invoice is configured to be billed through automatic charges,
 * Stripe automatically finalizes your invoice and attempts payment. Note
 * that finalizing the invoice,
 * [when automatic](https://docs.stripe.com/invoicing/integration/automatic-advancement-collection), does
 * not happen immediately as the invoice is created. Stripe waits
 * until one hour after the last webhook was successfully sent (or the last
 * webhook timed out after failing). If you (and the platforms you may have
 * connected to) have no webhooks configured, Stripe waits one hour after
 * creation to finalize the invoice.
 *
 * If your invoice is configured to be billed by sending an email, then based on your
 * [email settings](https://dashboard.stripe.com/account/billing/automatic),
 * Stripe will email the invoice to your customer and await payment. These
 * emails can contain a link to a hosted page to pay the invoice.
 *
 * Stripe applies any customer credit on the account before determining the
 * amount due for the invoice (i.e., the amount that will be actually
 * charged). If the amount due for the invoice is less than Stripe's [minimum allowed charge
 * per currency](/docs/currencies#minimum-and-maximum-charge-amounts), the
 * invoice is automatically marked paid, and we add the amount due to the
 * customer's credit balance which is applied to the next invoice.
 *
 * More details on the customer's credit balance are
 * [here](https://docs.stripe.com/billing/customer/balance).
 *
 * Related guide: [Send invoices to customers](https://docs.stripe.com/billing/invoices/sending)
 */
final class Invoice extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_due',
        'amount_overpaid',
        'amount_paid',
        'amount_paid_off_stripe',
        'amount_remaining',
        'amount_shipping',
        'attempt_count',
        'attempted',
        'auto_advance',
        'automatic_tax',
        'collection_method',
        'created',
        'currency',
        'customer',
        'default_tax_rates',
        'discounts',
        'id',
        'issuer',
        'lines',
        'livemode',
        'object_',
        'payment_settings',
        'period_end',
        'period_start',
        'post_payment_credit_notes_amount',
        'pre_payment_credit_notes_amount',
        'starting_balance',
        'status_transitions',
        'subtotal',
        'total',
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
        'account_country' => [
            'maxLength' => 5000,
        ],
        'account_name' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'customer_email' => [
            'maxLength' => 5000,
        ],
        'customer_name' => [
            'maxLength' => 5000,
        ],
        'customer_phone' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'footer' => [
            'maxLength' => 5000,
        ],
        'hosted_invoice_url' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'invoice_pdf' => [
            'maxLength' => 5000,
        ],
        'number' => [
            'maxLength' => 5000,
        ],
        'receipt_number' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The country of the business associated with this invoice, most often the business creating the invoice.
     */
    public ?string $account_country {
        set {
            $this->assigning('account_country', $value);
            $this->account_country = $value;
        }
    }
    /**
     * The public name of the business associated with this invoice, most often the business creating the invoice.
     */
    public ?string $account_name {
        set {
            $this->assigning('account_name', $value);
            $this->account_name = $value;
        }
    }
    /**
     * The account tax IDs associated with the invoice. Only editable when the invoice is a draft.
     */
    public ?\StripeSDK\Collections\Invoice\TaxIdsCollection $account_tax_ids;
    /**
     * Final amount due at this time for this invoice. If the invoice's total is smaller than the minimum charge amount, for example, or if there is account credit that can be applied to the invoice, the `amount_due` may be 0. If there is a positive `starting_balance` for the invoice (the customer owes money), the `amount_due` will also take that into account. The charge that gets generated for the invoice will be for the amount specified in `amount_due`.
     */
    public int $amount_due;
    /**
     * Amount that was overpaid on the invoice. The amount overpaid is credited to the customer's credit balance.
     */
    public int $amount_overpaid;
    /**
     * The amount, in cents (or local equivalent), that was paid.
     */
    public int $amount_paid;
    /**
     * Amount, in cents (or local equivalent), that was paid on the invoice outside of Stripe.
     */
    public int $amount_paid_off_stripe;
    /**
     * The difference between amount_due and amount_paid, in cents (or local equivalent).
     */
    public int $amount_remaining;
    /**
     * This is the sum of all the shipping amounts.
     */
    public int $amount_shipping;
    /**
     * ID of the Connect Application that created the invoice.
     */
    public ?\StripeSDK\DTOs\Invoice\ApplicationDTO $application;
    /**
     * Number of payment attempts made for this invoice, from the perspective of the payment retry schedule. Any payment attempt counts as the first attempt, and subsequently only automatic retries increment the attempt count. In other words, manual payment attempts after the first attempt do not affect the retry schedule. If a failure is returned with a non-retryable return code, the invoice can no longer be retried unless a new payment method is obtained. Retries will continue to be scheduled, and attempt_count will continue to increment, but retries will only be executed if a new payment method is obtained.
     */
    public int $attempt_count;
    /**
     * Whether an attempt has been made to pay the invoice. An invoice is not attempted until 1 hour after the `invoice.created` webhook, for example, so you might not want to display that invoice as unpaid to your users.
     */
    public bool $attempted;
    /**
     * Controls whether Stripe performs [automatic collection](https://docs.stripe.com/invoicing/integration/automatic-advancement-collection) of the invoice. If `false`, the invoice's state doesn't automatically advance without an explicit action.
     */
    public bool $auto_advance;
    public \StripeSDK\DTOs\AutomaticTax $automatic_tax;
    /**
     * The time when this invoice is currently scheduled to be automatically finalized. The field will be `null` if the invoice is not scheduled to finalize in the future. If the invoice is not in the draft state, this field will always be `null` - see `finalized_at` for the time when an already-finalized invoice was finalized.
     * Format: unix-time
     */
    public ?int $automatically_finalizes_at;
    /**
     * Indicates the reason why the invoice was created.
     *
     * * `manual`: Unrelated to a subscription, for example, created via the invoice editor.
     * * `subscription`: No longer in use. Applies to subscriptions from before May 2018 where no distinction was made between updates, cycles, and thresholds.
     * * `subscription_create`: A new subscription was created.
     * * `subscription_cycle`: A subscription advanced into a new period.
     * * `subscription_threshold`: A subscription reached a billing threshold.
     * * `subscription_update`: A subscription was updated.
     * * `upcoming`: Reserved for upcoming invoices created through the Create Preview Invoice API or when an `invoice.upcoming` event is generated for an upcoming invoice on a subscription.
     */
    public ?\StripeSDK\Enums\Invoice\BillingReasonEnum $billing_reason;
    /**
     * Either `charge_automatically`, or `send_invoice`. When charging automatically, Stripe will attempt to pay this invoice using the default source attached to the customer. When sending an invoice, Stripe will email this invoice to the customer with payment instructions.
     */
    public \StripeSDK\Enums\Invoice\CollectionMethodEnum $collection_method;
    /**
     * The confirmation secret associated with this invoice. Currently, this contains the client_secret of the PaymentIntent that Stripe creates during invoice finalization.
     */
    public ?\StripeSDK\DTOs\InvoicesResource\ConfirmationSecret $confirmation_secret;
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
     * Custom fields displayed on the invoice.
     */
    public ?\StripeSDK\Collections\Invoice\CustomFieldsCollection $custom_fields;
    /**
     * The ID of the customer to bill.
     */
    public \StripeSDK\DTOs\Invoice\CustomerDTO $customer;
    /**
     * The ID of the account representing the customer to bill.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * The customer's address. Until the invoice is finalized, this field will equal `customer.address`. Once the invoice is finalized, this field will no longer be updated.
     */
    public ?\StripeSDK\DTOs\Address $customer_address;
    /**
     * The customer's email. Until the invoice is finalized, this field will equal `customer.email`. Once the invoice is finalized, this field will no longer be updated.
     */
    public ?string $customer_email {
        set {
            $this->assigning('customer_email', $value);
            $this->customer_email = $value;
        }
    }
    /**
     * The customer's name. Until the invoice is finalized, this field will equal `customer.name`. Once the invoice is finalized, this field will no longer be updated.
     */
    public ?string $customer_name {
        set {
            $this->assigning('customer_name', $value);
            $this->customer_name = $value;
        }
    }
    /**
     * The customer's phone number. Until the invoice is finalized, this field will equal `customer.phone`. Once the invoice is finalized, this field will no longer be updated.
     */
    public ?string $customer_phone {
        set {
            $this->assigning('customer_phone', $value);
            $this->customer_phone = $value;
        }
    }
    /**
     * The customer's shipping information. Until the invoice is finalized, this field will equal `customer.shipping`. Once the invoice is finalized, this field will no longer be updated.
     */
    public ?\StripeSDK\DTOs\Shipping $customer_shipping;
    /**
     * The customer's tax exempt status. Until the invoice is finalized, this field will equal `customer.tax_exempt`. Once the invoice is finalized, this field will no longer be updated.
     */
    public ?\StripeSDK\Enums\Invoice\TaxExemptEnum $customer_tax_exempt;
    /**
     * The customer's tax IDs. Until the invoice is finalized, this field will contain the same tax IDs as `customer.tax_ids`. Once the invoice is finalized, this field will no longer be updated.
     */
    public ?\StripeSDK\Collections\Invoice\CustomerTaxIdsArray\TaxIdsCollection $customer_tax_ids;
    /**
     * ID of the default payment method for the invoice. It must belong to the customer associated with the invoice. If not set, defaults to the subscription's default payment method, if any, or to the default payment method in the customer's invoice settings.
     */
    public ?\StripeSDK\DTOs\Invoice\PaymentMethodDTO $default_payment_method;
    /**
     * ID of the default payment source for the invoice. It must belong to the customer associated with the invoice and be in a chargeable state. If not set, defaults to the subscription's default source, if any, or to the customer's default source.
     */
    public ?\StripeSDK\DTOs\Invoice\DefaultSourceDTO $default_source;
    /**
     * The tax rates applied to this invoice, if any.
     */
    public \StripeSDK\Collections\Credit\NoteLineItem\TaxRatesCollection $default_tax_rates;
    /**
     * An arbitrary string attached to the object. Often useful for displaying to users. Referenced as 'memo' in the Dashboard.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The discounts applied to the invoice. Line item discounts are applied before invoice discounts. Use `expand[]=discounts` to expand each discount.
     */
    public \StripeSDK\Collections\Invoice\DiscountsCollection $discounts;
    /**
     * The date on which payment for this invoice is due. This value will be `null` for invoices where `collection_method=charge_automatically`.
     * Format: unix-time
     */
    public ?int $due_date;
    /**
     * The date when this invoice is in effect. Same as `finalized_at` unless overwritten. When defined, this value replaces the system-generated 'Date of issue' printed on the invoice PDF and receipt.
     * Format: unix-time
     */
    public ?int $effective_at;
    /**
     * Ending customer balance after the invoice is finalized. Invoices are finalized approximately an hour after successful webhook delivery or when payment collection is attempted for the invoice. If the invoice has not been finalized yet, this will be null.
     */
    public ?int $ending_balance;
    /**
     * Footer displayed on the invoice.
     */
    public ?string $footer {
        set {
            $this->assigning('footer', $value);
            $this->footer = $value;
        }
    }
    /**
     * Details of the invoice that was cloned. See the [revision documentation](https://docs.stripe.com/invoicing/invoice-revisions) for more details.
     */
    public ?\StripeSDK\DTOs\InvoicesResource\FromInvoice $from_invoice;
    /**
     * The URL for the hosted invoice page, which allows customers to view and pay an invoice. If the invoice has not been finalized yet, this will be null.
     */
    public ?string $hosted_invoice_url {
        set {
            $this->assigning('hosted_invoice_url', $value);
            $this->hosted_invoice_url = $value;
        }
    }
    /**
     * Unique identifier for the object. For preview invoices created using the [create preview](https://stripe.com/docs/api/invoices/create_preview) endpoint, this id will be prefixed with `upcoming_in`.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The link to download the PDF for the invoice. If the invoice has not been finalized yet, this will be null.
     */
    public ?string $invoice_pdf {
        set {
            $this->assigning('invoice_pdf', $value);
            $this->invoice_pdf = $value;
        }
    }
    public \StripeSDK\DTOs\ConnectAccountReference $issuer;
    /**
     * The error encountered during the previous attempt to finalize the invoice. This field is cleared when the invoice is successfully finalized.
     */
    public ?\StripeSDK\DTOs\ApiErrors $last_finalization_error;
    /**
     * The ID of the most recent non-draft revision of this invoice
     */
    public ?\StripeSDK\DTOs\Invoice\LatestRevisionDTO $latest_revision;
    /**
     * The individual line items that make up the invoice. `lines` is sorted as follows: (1) pending invoice items (including prorations) in reverse chronological order, (2) subscription items in reverse chronological order, and (3) invoice items added after invoice creation in chronological order.
     */
    public \StripeSDK\DTOs\Invoice\LinesDTO $lines;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Invoice\MetadataMap $metadata;
    /**
     * The time at which payment will next be attempted. This value will be `null` for invoices where `collection_method=send_invoice`.
     * Format: unix-time
     */
    public ?int $next_payment_attempt;
    /**
     * A unique, identifying string that appears on emails sent to the customer for this invoice. This starts with the customer's unique invoice_prefix if it is specified.
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
    public \StripeSDK\Enums\Invoice\ObjectEnum $object_;
    /**
     * The account (if any) for which the funds of the invoice payment are intended. If set, the invoice will be presented with the branding and support information of the specified account. See the [Invoices with Connect](https://docs.stripe.com/billing/invoices/connect) documentation for details.
     */
    public ?\StripeSDK\DTOs\Invoice\OnBehalfDTO $on_behalf_of;
    /**
     * The parent that generated this invoice
     */
    public ?\StripeSDK\DTOs\Billing\BillResourceInvoicingParentsInvoiceParent $parent_;
    public \StripeSDK\DTOs\InvoicesPaymentSettings $payment_settings;
    /**
     * Payments for this invoice. Use [invoice payment](/api/invoice-payment) to get more details.
     */
    public \StripeSDK\DTOs\Invoice\PaymentsDTO $payments;
    /**
     * The latest timestamp at which invoice items can be associated with this invoice. Use the [line item period](/api/invoices/line_item#invoice_line_item_object-period) to get the service period for each price.
     * Format: unix-time
     */
    public int $period_end;
    /**
     * The earliest timestamp at which invoice items can be associated with this invoice. Use the [line item period](/api/invoices/line_item#invoice_line_item_object-period) to get the service period for each price.
     * Format: unix-time
     */
    public int $period_start;
    /**
     * Total amount of all post-payment credit notes issued for this invoice.
     */
    public int $post_payment_credit_notes_amount;
    /**
     * Total amount of all pre-payment credit notes issued for this invoice.
     */
    public int $pre_payment_credit_notes_amount;
    /**
     * This is the transaction number that appears on email receipts sent for this invoice.
     */
    public ?string $receipt_number {
        set {
            $this->assigning('receipt_number', $value);
            $this->receipt_number = $value;
        }
    }
    /**
     * The rendering-related settings that control how invoices render in customer-facing interfaces such as the PDF or hosted invoice page.
     */
    public ?\StripeSDK\DTOs\InvoicesResource\InvoiceRendering $rendering;
    /**
     * The details of the cost of shipping, including the ShippingRate applied on the invoice.
     */
    public ?\StripeSDK\DTOs\InvoicesResource\ShippingCost $shipping_cost;
    /**
     * Shipping details for the invoice. The Invoice PDF will use the `shipping_details` value if it is set, otherwise the PDF will render the shipping address from the customer.
     */
    public ?\StripeSDK\DTOs\Shipping $shipping_details;
    /**
     * Starting customer balance before the invoice is finalized. If the invoice has not been finalized yet, this will be the current customer balance. For revision invoices, this also includes any customer balance that was applied to the original invoice.
     */
    public int $starting_balance;
    /**
     * Extra information about an invoice for the customer's credit card statement.
     */
    public ?string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * The status of the invoice, one of `draft`, `open`, `paid`, `uncollectible`, or `void`. [Learn more](https://docs.stripe.com/billing/invoices/workflow#workflow-overview)
     */
    public ?\StripeSDK\Enums\Invoice\StatusEnum $status;
    public \StripeSDK\DTOs\InvoicesResource\StatusDetails $status_details;
    public \StripeSDK\DTOs\InvoicesResource\StatusTransitions $status_transitions;
    /**
     * Total of all subscriptions, invoice items, and prorations on the invoice before any invoice level discount or exclusive tax is applied. Item discounts are already incorporated
     */
    public int $subtotal;
    /**
     * The integer amount in cents (or local equivalent) representing the subtotal of the invoice before any invoice level discount or tax is applied. Item discounts are already incorporated
     */
    public ?int $subtotal_excluding_tax;
    /**
     * ID of the test clock this invoice belongs to.
     */
    public ?\StripeSDK\DTOs\Invoice\TestClockDTO $test_clock;
    public \StripeSDK\DTOs\Invoice\ThresholdReason $threshold_reason;
    /**
     * Total after discounts and taxes.
     */
    public int $total;
    /**
     * The aggregate amounts calculated per discount across all line items.
     */
    public ?\StripeSDK\Collections\Credit\Note\DiscountAmountsCollection $total_discount_amounts;
    /**
     * The integer amount in cents (or local equivalent) representing the total amount of the invoice including all discounts but excluding all tax.
     */
    public ?int $total_excluding_tax;
    /**
     * Contains pretax credit amounts (ex: discount, credit grants, etc) that apply to this invoice. This is a combined list of total_pretax_credit_amounts across all invoice line items.
     */
    public ?\StripeSDK\Collections\Invoice\CreditAmountsCollection $total_pretax_credit_amounts;
    /**
     * The aggregate tax information of all line items.
     */
    public ?\StripeSDK\Collections\Credit\Note\TotalTaxesCollection $total_taxes;
    /**
     * Invoices are automatically paid or sent 1 hour after webhooks are delivered, or until all webhook delivery attempts have [been exhausted](https://docs.stripe.com/billing/webhooks#understand). This field tracks the time when webhooks for this invoice were successfully delivered. If the invoice had no webhooks to deliver, this will be set while the invoice is being created.
     * Format: unix-time
     */
    public ?int $webhooks_delivered_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'account_country' => $value === null || is_string($value) ? $this->account_country = $value : parent::assignMember($name, $value),
            'account_name' => $value === null || is_string($value) ? $this->account_name = $value : parent::assignMember($name, $value),
            'amount_due' => is_int($value) ? $this->amount_due = $value : parent::assignMember($name, $value),
            'amount_overpaid' => is_int($value) ? $this->amount_overpaid = $value : parent::assignMember($name, $value),
            'amount_paid' => is_int($value) ? $this->amount_paid = $value : parent::assignMember($name, $value),
            'amount_paid_off_stripe' => is_int($value) ? $this->amount_paid_off_stripe = $value : parent::assignMember($name, $value),
            'amount_remaining' => is_int($value) ? $this->amount_remaining = $value : parent::assignMember($name, $value),
            'amount_shipping' => is_int($value) ? $this->amount_shipping = $value : parent::assignMember($name, $value),
            'attempt_count' => is_int($value) ? $this->attempt_count = $value : parent::assignMember($name, $value),
            'attempted' => is_bool($value) ? $this->attempted = $value : parent::assignMember($name, $value),
            'auto_advance' => is_bool($value) ? $this->auto_advance = $value : parent::assignMember($name, $value),
            'automatic_tax' => $value instanceof \stdClass ? $this->automatic_tax = new \StripeSDK\DTOs\AutomaticTax($value) : parent::assignMember($name, $value),
            'automatically_finalizes_at' => $value === null || is_int($value) ? $this->automatically_finalizes_at = $value : parent::assignMember($name, $value),
            'billing_reason' => $value === null || is_string($value) ? $this->billing_reason = $value === null ? null : \StripeSDK\Enums\Invoice\BillingReasonEnum::from($value) : parent::assignMember($name, $value),
            'collection_method' => is_string($value) ? $this->collection_method = \StripeSDK\Enums\Invoice\CollectionMethodEnum::from($value) : parent::assignMember($name, $value),
            'confirmation_secret' => $value === null || $value instanceof \stdClass ? $this->confirmation_secret = $value === null ? null : new \StripeSDK\DTOs\InvoicesResource\ConfirmationSecret($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'custom_fields' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->custom_fields = $value === null ? null : new \StripeSDK\Collections\Invoice\CustomFieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Invoice\SettingCustomField::class)) : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'customer_address' => $value === null || $value instanceof \stdClass ? $this->customer_address = $value === null ? null : new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            'customer_email' => $value === null || is_string($value) ? $this->customer_email = $value : parent::assignMember($name, $value),
            'customer_name' => $value === null || is_string($value) ? $this->customer_name = $value : parent::assignMember($name, $value),
            'customer_phone' => $value === null || is_string($value) ? $this->customer_phone = $value : parent::assignMember($name, $value),
            'customer_shipping' => $value === null || $value instanceof \stdClass ? $this->customer_shipping = $value === null ? null : new \StripeSDK\DTOs\Shipping($value) : parent::assignMember($name, $value),
            'customer_tax_exempt' => $value === null || is_string($value) ? $this->customer_tax_exempt = $value === null ? null : \StripeSDK\Enums\Invoice\TaxExemptEnum::from($value) : parent::assignMember($name, $value),
            'customer_tax_ids' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->customer_tax_ids = $value === null ? null : new \StripeSDK\Collections\Invoice\CustomerTaxIdsArray\TaxIdsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\InvoicesResource\InvoiceTaxId::class)) : parent::assignMember($name, $value),
            'default_tax_rates' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->default_tax_rates = new \StripeSDK\Collections\Credit\NoteLineItem\TaxRatesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\TaxRate::class)) : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'due_date' => $value === null || is_int($value) ? $this->due_date = $value : parent::assignMember($name, $value),
            'effective_at' => $value === null || is_int($value) ? $this->effective_at = $value : parent::assignMember($name, $value),
            'ending_balance' => $value === null || is_int($value) ? $this->ending_balance = $value : parent::assignMember($name, $value),
            'footer' => $value === null || is_string($value) ? $this->footer = $value : parent::assignMember($name, $value),
            'from_invoice' => $value === null || $value instanceof \stdClass ? $this->from_invoice = $value === null ? null : new \StripeSDK\DTOs\InvoicesResource\FromInvoice($value) : parent::assignMember($name, $value),
            'hosted_invoice_url' => $value === null || is_string($value) ? $this->hosted_invoice_url = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'invoice_pdf' => $value === null || is_string($value) ? $this->invoice_pdf = $value : parent::assignMember($name, $value),
            'issuer' => $value instanceof \stdClass ? $this->issuer = new \StripeSDK\DTOs\ConnectAccountReference($value) : parent::assignMember($name, $value),
            'last_finalization_error' => $value === null || $value instanceof \stdClass ? $this->last_finalization_error = $value === null ? null : new \StripeSDK\DTOs\ApiErrors($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'next_payment_attempt' => $value === null || is_int($value) ? $this->next_payment_attempt = $value : parent::assignMember($name, $value),
            'number' => $value === null || is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Invoice\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'parent' => $value === null || $value instanceof \stdClass ? $this->parent_ = $value === null ? null : new \StripeSDK\DTOs\Billing\BillResourceInvoicingParentsInvoiceParent($value) : parent::assignMember($name, $value),
            'payment_settings' => $value instanceof \stdClass ? $this->payment_settings = new \StripeSDK\DTOs\InvoicesPaymentSettings($value) : parent::assignMember($name, $value),
            'period_end' => is_int($value) ? $this->period_end = $value : parent::assignMember($name, $value),
            'period_start' => is_int($value) ? $this->period_start = $value : parent::assignMember($name, $value),
            'post_payment_credit_notes_amount' => is_int($value) ? $this->post_payment_credit_notes_amount = $value : parent::assignMember($name, $value),
            'pre_payment_credit_notes_amount' => is_int($value) ? $this->pre_payment_credit_notes_amount = $value : parent::assignMember($name, $value),
            'receipt_number' => $value === null || is_string($value) ? $this->receipt_number = $value : parent::assignMember($name, $value),
            'rendering' => $value === null || $value instanceof \stdClass ? $this->rendering = $value === null ? null : new \StripeSDK\DTOs\InvoicesResource\InvoiceRendering($value) : parent::assignMember($name, $value),
            'shipping_cost' => $value === null || $value instanceof \stdClass ? $this->shipping_cost = $value === null ? null : new \StripeSDK\DTOs\InvoicesResource\ShippingCost($value) : parent::assignMember($name, $value),
            'shipping_details' => $value === null || $value instanceof \stdClass ? $this->shipping_details = $value === null ? null : new \StripeSDK\DTOs\Shipping($value) : parent::assignMember($name, $value),
            'starting_balance' => is_int($value) ? $this->starting_balance = $value : parent::assignMember($name, $value),
            'statement_descriptor' => $value === null || is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'status' => $value === null || is_string($value) ? $this->status = $value === null ? null : \StripeSDK\Enums\Invoice\StatusEnum::from($value) : parent::assignMember($name, $value),
            'status_details' => $value instanceof \stdClass ? $this->status_details = new \StripeSDK\DTOs\InvoicesResource\StatusDetails($value) : parent::assignMember($name, $value),
            'status_transitions' => $value instanceof \stdClass ? $this->status_transitions = new \StripeSDK\DTOs\InvoicesResource\StatusTransitions($value) : parent::assignMember($name, $value),
            'subtotal' => is_int($value) ? $this->subtotal = $value : parent::assignMember($name, $value),
            'subtotal_excluding_tax' => $value === null || is_int($value) ? $this->subtotal_excluding_tax = $value : parent::assignMember($name, $value),
            'threshold_reason' => $value instanceof \stdClass ? $this->threshold_reason = new \StripeSDK\DTOs\Invoice\ThresholdReason($value) : parent::assignMember($name, $value),
            'total' => is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            'total_discount_amounts' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->total_discount_amounts = $value === null ? null : new \StripeSDK\Collections\Credit\Note\DiscountAmountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\DiscountsResourceDiscountAmount::class)) : parent::assignMember($name, $value),
            'total_excluding_tax' => $value === null || is_int($value) ? $this->total_excluding_tax = $value : parent::assignMember($name, $value),
            'total_pretax_credit_amounts' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->total_pretax_credit_amounts = $value === null ? null : new \StripeSDK\Collections\Invoice\CreditAmountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\InvoicesResource\PretaxCreditAmount::class)) : parent::assignMember($name, $value),
            'total_taxes' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->total_taxes = $value === null ? null : new \StripeSDK\Collections\Credit\Note\TotalTaxesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Billing\BillResourceInvoicingTaxesTax::class)) : parent::assignMember($name, $value),
            'webhooks_delivered_at' => $value === null || is_int($value) ? $this->webhooks_delivered_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
