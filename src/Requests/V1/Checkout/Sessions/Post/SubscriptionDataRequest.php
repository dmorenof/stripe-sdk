<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post;

/**
 * subscription_data_params
 *
 * A subset of parameters to be passed to subscription creation for Checkout Sessions in `subscription` mode.
 */
final class SubscriptionDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 500,
        ],
    ];

    public float $application_fee_percent;
    /**
     * Format: unix-time
     */
    public int $billing_cycle_anchor;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\SubscriptionData\AnchorConfigRequest $billing_cycle_anchor_config;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\SubscriptionData\BillingModeRequest $billing_mode;
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $default_tax_rates;
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\SubscriptionData\InvoiceSettingsRequest $invoice_settings;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\SubscriptionData\MetadataMapRequest $metadata;
    public string $on_behalf_of;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\SubscriptionData\InvoiceIntervalRequest $pending_invoice_item_interval;
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\SubscriptionData\ProrationBehaviorEnum $proration_behavior;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\SubscriptionData\TransferDataRequest $transfer_data;
    /**
     * Format: unix-time
     */
    public int $trial_end;
    public int $trial_period_days;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\SubscriptionData\TrialSettingsRequest $trial_settings;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'application_fee_percent' => is_float($value) ? $this->application_fee_percent = $value : parent::assignMember($name, $value),
            'billing_cycle_anchor' => is_int($value) ? $this->billing_cycle_anchor = $value : parent::assignMember($name, $value),
            'default_tax_rates' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->default_tax_rates = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'on_behalf_of' => is_string($value) ? $this->on_behalf_of = $value : parent::assignMember($name, $value),
            'proration_behavior' => is_string($value) ? $this->proration_behavior = \StripeSDK\Enums\V1\Checkout\Sessions\Post\SubscriptionData\ProrationBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'trial_end' => is_int($value) ? $this->trial_end = $value : parent::assignMember($name, $value),
            'trial_period_days' => is_int($value) ? $this->trial_period_days = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
