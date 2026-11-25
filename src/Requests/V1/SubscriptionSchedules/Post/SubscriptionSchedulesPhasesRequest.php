<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\Post;

/**
 * phase_configuration_params
 */
final class SubscriptionSchedulesPhasesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'items',
    ];

    protected const array VALIDATION = [
        'default_payment_method' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Collections\V1\SubscriptionSchedules\Post\PhasesItem\InvoiceItemsCollection $add_invoice_items;
    public float $application_fee_percent;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PhasesItem\AutomaticTaxRequest $automatic_tax;
    public \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PhasesItem\CycleAnchorEnum $billing_cycle_anchor;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PhasesItem\BillingThresholdsRequest $billing_thresholds;
    public \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PhasesItem\CollectionMethodEnum $collection_method;
    /**
     * Format: currency
     */
    public string $currency;
    public string $default_payment_method {
        set {
            $this->assigning('default_payment_method', $value);
            $this->default_payment_method = $value;
        }
    }
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PhasesItem\TaxRatesRequest $default_tax_rates;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PhasesItem\PhasesItemDescriptionRequest $description;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PhasesItem\PhasesItemDiscountsRequest $discounts;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PhasesItem\PhasesItemDurationRequest $duration;
    /**
     * Format: unix-time
     */
    public int $end_date;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PhasesItem\InvoiceSettingsRequest $invoice_settings;
    public \StripeSDK\Collections\V1\SubscriptionSchedules\Post\PhasesItem\PhasesItemItemsCollection $items;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PhasesItem\MetadataMapRequest $metadata;
    public string $on_behalf_of;
    public \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PhasesItem\ProrationBehaviorEnum $proration_behavior;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\PhasesItem\TransferDataRequest $transfer_data;
    public bool $trial;
    /**
     * Format: unix-time
     */
    public int $trial_end;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'application_fee_percent' => is_float($value) ? $this->application_fee_percent = $value : parent::assignMember($name, $value),
            'billing_cycle_anchor' => is_string($value) ? $this->billing_cycle_anchor = \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PhasesItem\CycleAnchorEnum::from($value) : parent::assignMember($name, $value),
            'collection_method' => is_string($value) ? $this->collection_method = \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PhasesItem\CollectionMethodEnum::from($value) : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'default_payment_method' => is_string($value) ? $this->default_payment_method = $value : parent::assignMember($name, $value),
            'end_date' => is_int($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'on_behalf_of' => is_string($value) ? $this->on_behalf_of = $value : parent::assignMember($name, $value),
            'proration_behavior' => is_string($value) ? $this->proration_behavior = \StripeSDK\Enums\V1\SubscriptionSchedules\Post\PhasesItem\ProrationBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'trial' => is_bool($value) ? $this->trial = $value : parent::assignMember($name, $value),
            'trial_end' => is_int($value) ? $this->trial_end = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
