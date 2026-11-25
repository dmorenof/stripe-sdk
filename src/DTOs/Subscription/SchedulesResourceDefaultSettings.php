<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Subscription;

/**
 * SubscriptionSchedulesResourceDefaultSettings
 */
final class SchedulesResourceDefaultSettings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'billing_cycle_anchor',
        'invoice_settings',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A non-negative decimal between 0 and 100, with at most two decimal places. This represents the percentage of the subscription invoice total that will be transferred to the application owner's Stripe account during this phase of the schedule.
     */
    public ?float $application_fee_percent;
    public \StripeSDK\DTOs\Subscription\SchedulesResourceDefaultSettingsAutomaticTax $automatic_tax;
    /**
     * Possible values are `phase_start` or `automatic`. If `phase_start` then billing cycle anchor of the subscription is set to the start of the phase when entering the phase. If `automatic` then the billing cycle anchor is automatically modified as needed when entering the phase. For more information, see the billing cycle [documentation](https://docs.stripe.com/billing/subscriptions/billing-cycle).
     */
    public \StripeSDK\Enums\Subscription\SchedulesResourceDefaultSettings\CycleAnchorEnum $billing_cycle_anchor;
    /**
     * Define thresholds at which an invoice will be sent, and the subscription advanced to a new billing period
     */
    public ?\StripeSDK\DTOs\Subscription\BillingThresholds $billing_thresholds;
    /**
     * Either `charge_automatically`, or `send_invoice`. When charging automatically, Stripe will attempt to pay the underlying subscription at the end of each billing cycle using the default source attached to the customer. When sending an invoice, Stripe will email your customer an invoice with payment instructions and mark the subscription as `active`.
     */
    public ?\StripeSDK\Enums\Subscription\SchedulesResourceDefaultSettings\CollectionMethodEnum $collection_method;
    /**
     * ID of the default payment method for the subscription schedule. If not set, invoices will use the default payment method in the customer's invoice settings.
     */
    public ?\StripeSDK\DTOs\Subscription\SchedulesResourceDefaultSettings\PaymentMethodDTO $default_payment_method;
    /**
     * Subscription description, meant to be displayable to the customer. Use this field to optionally store an explanation of the subscription for rendering in Stripe surfaces and certain local payment methods UIs.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public \StripeSDK\DTOs\Invoice\SettingSubscriptionScheduleSetting $invoice_settings;
    /**
     * The account (if any) the charge was made on behalf of for charges associated with the schedule's subscription. See the Connect documentation for details.
     */
    public ?\StripeSDK\DTOs\Subscription\SchedulesResourceDefaultSettings\OnBehalfDTO $on_behalf_of;
    /**
     * The account (if any) the associated subscription's payments will be attributed to for tax reporting, and where funds from each payment will be transferred to for each of the subscription's invoices.
     */
    public ?\StripeSDK\DTOs\Subscription\TransferData $transfer_data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'application_fee_percent' => $value === null || is_float($value) ? $this->application_fee_percent = $value : parent::assignMember($name, $value),
            'automatic_tax' => $value instanceof \stdClass ? $this->automatic_tax = new \StripeSDK\DTOs\Subscription\SchedulesResourceDefaultSettingsAutomaticTax($value) : parent::assignMember($name, $value),
            'billing_cycle_anchor' => is_string($value) ? $this->billing_cycle_anchor = \StripeSDK\Enums\Subscription\SchedulesResourceDefaultSettings\CycleAnchorEnum::from($value) : parent::assignMember($name, $value),
            'billing_thresholds' => $value === null || $value instanceof \stdClass ? $this->billing_thresholds = $value === null ? null : new \StripeSDK\DTOs\Subscription\BillingThresholds($value) : parent::assignMember($name, $value),
            'collection_method' => $value === null || is_string($value) ? $this->collection_method = $value === null ? null : \StripeSDK\Enums\Subscription\SchedulesResourceDefaultSettings\CollectionMethodEnum::from($value) : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'invoice_settings' => $value instanceof \stdClass ? $this->invoice_settings = new \StripeSDK\DTOs\Invoice\SettingSubscriptionScheduleSetting($value) : parent::assignMember($name, $value),
            'transfer_data' => $value === null || $value instanceof \stdClass ? $this->transfer_data = $value === null ? null : new \StripeSDK\DTOs\Subscription\TransferData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
