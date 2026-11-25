<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\Post;

/**
 * default_settings_params
 *
 * Object representing the subscription schedule's default settings.
 */
final class DefaultSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'default_payment_method' => [
            'maxLength' => 5000,
        ],
    ];

    public float $application_fee_percent;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\DefaultSettings\AutomaticTaxRequest $automatic_tax;
    public \StripeSDK\Enums\V1\SubscriptionSchedules\Post\DefaultSettings\CycleAnchorEnum $billing_cycle_anchor;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\DefaultSettings\BillingThresholdsRequest $billing_thresholds;
    public \StripeSDK\Enums\V1\SubscriptionSchedules\Post\DefaultSettings\CollectionMethodEnum $collection_method;
    public string $default_payment_method {
        set {
            $this->assigning('default_payment_method', $value);
            $this->default_payment_method = $value;
        }
    }
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\DefaultSettings\SettingsDescriptionRequest $description;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\DefaultSettings\InvoiceSettingsRequest $invoice_settings;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\DefaultSettings\OnBehalfRequest $on_behalf_of;
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\DefaultSettings\TransferDataRequest $transfer_data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'application_fee_percent' => is_float($value) ? $this->application_fee_percent = $value : parent::assignMember($name, $value),
            'billing_cycle_anchor' => is_string($value) ? $this->billing_cycle_anchor = \StripeSDK\Enums\V1\SubscriptionSchedules\Post\DefaultSettings\CycleAnchorEnum::from($value) : parent::assignMember($name, $value),
            'collection_method' => is_string($value) ? $this->collection_method = \StripeSDK\Enums\V1\SubscriptionSchedules\Post\DefaultSettings\CollectionMethodEnum::from($value) : parent::assignMember($name, $value),
            'default_payment_method' => is_string($value) ? $this->default_payment_method = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
