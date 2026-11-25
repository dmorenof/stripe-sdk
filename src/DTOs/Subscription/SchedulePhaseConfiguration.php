<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * Phase
 *
 * A phase describes the plans, coupon, and trialing status of a subscription for a predefined time period.
 */
final class SchedulePhaseConfiguration extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'add_invoice_items',
        'currency',
        'discounts',
        'end_date',
        'items',
        'proration_behavior',
        'start_date',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A list of prices and quantities that will generate invoice items appended to the next invoice for this phase.
     */
    public \StripeSDK\Collections\Subscription\SchedulePhaseConfiguration\InvoiceItemsCollection $add_invoice_items;
    /**
     * A non-negative decimal between 0 and 100, with at most two decimal places. This represents the percentage of the subscription invoice total that will be transferred to the application owner's Stripe account during this phase of the schedule.
     */
    public ?float $application_fee_percent;
    public \StripeSDK\DTOs\SchedulesPhaseAutomaticTax $automatic_tax;
    /**
     * Possible values are `phase_start` or `automatic`. If `phase_start` then billing cycle anchor of the subscription is set to the start of the phase when entering the phase. If `automatic` then the billing cycle anchor is automatically modified as needed when entering the phase. For more information, see the billing cycle [documentation](https://docs.stripe.com/billing/subscriptions/billing-cycle).
     */
    public ?\StripeSDK\Enums\Subscription\SchedulePhaseConfiguration\CycleAnchorEnum $billing_cycle_anchor;
    /**
     * Define thresholds at which an invoice will be sent, and the subscription advanced to a new billing period
     */
    public ?\StripeSDK\DTOs\Subscription\BillingThresholds $billing_thresholds;
    /**
     * Either `charge_automatically`, or `send_invoice`. When charging automatically, Stripe will attempt to pay the underlying subscription at the end of each billing cycle using the default source attached to the customer. When sending an invoice, Stripe will email your customer an invoice with payment instructions and mark the subscription as `active`.
     */
    public ?\StripeSDK\Enums\Subscription\SchedulePhaseConfiguration\CollectionMethodEnum $collection_method;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * ID of the default payment method for the subscription schedule. It must belong to the customer associated with the subscription schedule. If not set, invoices will use the default payment method in the customer's invoice settings.
     */
    public ?\StripeSDK\DTOs\Subscription\SchedulePhaseConfiguration\PaymentMethodDTO $default_payment_method;
    /**
     * The default tax rates to apply to the subscription during this phase of the subscription schedule.
     */
    public ?\StripeSDK\Collections\Credit\NoteLineItem\TaxRatesCollection $default_tax_rates;
    /**
     * Subscription description, meant to be displayable to the customer. Use this field to optionally store an explanation of the subscription for rendering in Stripe surfaces and certain local payment methods UIs.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The stackable discounts that will be applied to the subscription on this phase. Subscription item discounts are applied before subscription discounts.
     */
    public \StripeSDK\Collections\Subscription\SchedulePhaseConfiguration\DiscountsCollection $discounts;
    /**
     * The end of this phase of the subscription schedule.
     * Format: unix-time
     */
    public int $end_date;
    /**
     * The invoice settings applicable during this phase.
     */
    public ?\StripeSDK\DTOs\Invoice\SettingSubscriptionSchedulePhaseSetting $invoice_settings;
    /**
     * Subscription items to configure the subscription to during this phase of the subscription schedule.
     */
    public \StripeSDK\Collections\Subscription\SchedulePhaseConfiguration\ItemsCollection $items;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to a phase. Metadata on a schedule's phase will update the underlying subscription's `metadata` when the phase is entered. Updating the underlying subscription's `metadata` directly will not affect the current phase's `metadata`.
     */
    public ?\StripeSDK\DTOs\Subscription\SchedulePhaseConfiguration\MetadataMap $metadata;
    /**
     * The account (if any) the charge was made on behalf of for charges associated with the schedule's subscription. See the Connect documentation for details.
     */
    public ?\StripeSDK\DTOs\Subscription\SchedulePhaseConfiguration\OnBehalfDTO $on_behalf_of;
    /**
     * When transitioning phases, controls how prorations are handled (if any). Possible values are `create_prorations`, `none`, and `always_invoice`.
     */
    public \StripeSDK\Enums\Subscription\SchedulePhaseConfiguration\ProrationBehaviorEnum $proration_behavior;
    /**
     * The start of this phase of the subscription schedule.
     * Format: unix-time
     */
    public int $start_date;
    /**
     * The account (if any) the associated subscription's payments will be attributed to for tax reporting, and where funds from each payment will be transferred to for each of the subscription's invoices.
     */
    public ?\StripeSDK\DTOs\Subscription\TransferData $transfer_data;
    /**
     * If set to true the entire phase is counted as a trial and the customer will not be charged for any fees.
     */
    public bool $trial;
    /**
     * When the trial ends within the phase.
     * Format: unix-time
     */
    public ?int $trial_end;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'add_invoice_items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->add_invoice_items = new \StripeSDK\Collections\Subscription\SchedulePhaseConfiguration\InvoiceItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Subscription\ScheduleAddInvoiceItem::class)) : parent::assignMember($name, $value),
            'application_fee_percent' => $value === null || is_float($value) ? $this->application_fee_percent = $value : parent::assignMember($name, $value),
            'automatic_tax' => $value instanceof \stdClass ? $this->automatic_tax = new \StripeSDK\DTOs\SchedulesPhaseAutomaticTax($value) : parent::assignMember($name, $value),
            'billing_cycle_anchor' => $value === null || is_string($value) ? $this->billing_cycle_anchor = $value === null ? null : \StripeSDK\Enums\Subscription\SchedulePhaseConfiguration\CycleAnchorEnum::from($value) : parent::assignMember($name, $value),
            'billing_thresholds' => $value === null || $value instanceof \stdClass ? $this->billing_thresholds = $value === null ? null : new \StripeSDK\DTOs\Subscription\BillingThresholds($value) : parent::assignMember($name, $value),
            'collection_method' => $value === null || is_string($value) ? $this->collection_method = $value === null ? null : \StripeSDK\Enums\Subscription\SchedulePhaseConfiguration\CollectionMethodEnum::from($value) : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'default_tax_rates' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->default_tax_rates = $value === null ? null : new \StripeSDK\Collections\Credit\NoteLineItem\TaxRatesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\TaxRate::class)) : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'discounts' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->discounts = new \StripeSDK\Collections\Subscription\SchedulePhaseConfiguration\DiscountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\StackableDiscountWithDiscountSettingsAndDiscountEnd::class)) : parent::assignMember($name, $value),
            'end_date' => is_int($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'invoice_settings' => $value === null || $value instanceof \stdClass ? $this->invoice_settings = $value === null ? null : new \StripeSDK\DTOs\Invoice\SettingSubscriptionSchedulePhaseSetting($value) : parent::assignMember($name, $value),
            'items' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->items = new \StripeSDK\Collections\Subscription\SchedulePhaseConfiguration\ItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Subscription\ScheduleConfigurationItem::class)) : parent::assignMember($name, $value),
            'proration_behavior' => is_string($value) ? $this->proration_behavior = \StripeSDK\Enums\Subscription\SchedulePhaseConfiguration\ProrationBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'start_date' => is_int($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            'transfer_data' => $value === null || $value instanceof \stdClass ? $this->transfer_data = $value === null ? null : new \StripeSDK\DTOs\Subscription\TransferData($value) : parent::assignMember($name, $value),
            'trial' => is_bool($value) ? $this->trial = $value : parent::assignMember($name, $value),
            'trial_end' => $value === null || is_int($value) ? $this->trial_end = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
