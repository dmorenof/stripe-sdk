<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\Post;

/**
 * subscription_data_params
 *
 * When creating a subscription, the specified configuration data will be used. There must be at least one line item with a recurring price to use `subscription_data`.
 */
final class SubscriptionDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 500,
        ],
    ];

    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public \StripeSDK\Requests\V1\PaymentLinks\Post\SubscriptionData\InvoiceSettingsRequest $invoice_settings;
    public \StripeSDK\Requests\V1\PaymentLinks\Post\SubscriptionData\MetadataMapRequest $metadata;
    public int $trial_period_days;
    public \StripeSDK\Requests\V1\PaymentLinks\Post\SubscriptionData\TrialSettingsRequest $trial_settings;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'trial_period_days' => is_int($value) ? $this->trial_period_days = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
