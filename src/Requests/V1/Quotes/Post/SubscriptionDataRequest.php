<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Quotes\Post;

/**
 * subscription_data_create_params
 *
 * When creating a subscription or subscription schedule, the specified configuration data will be used. There must be at least one line item with a recurring price for a subscription or subscription schedule to be created. A subscription schedule is created if `subscription_data[effective_date]` is present and in the future, otherwise a subscription is created.
 */
final class SubscriptionDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 500,
        ],
    ];

    public \StripeSDK\Requests\V1\Quotes\Post\SubscriptionData\BillingModeRequest $billing_mode;
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public \StripeSDK\Requests\V1\Quotes\Post\SubscriptionData\EffectiveDateRequest $effective_date;
    public \StripeSDK\Requests\V1\Quotes\Post\SubscriptionData\MetadataMapRequest $metadata;
    public \StripeSDK\Requests\V1\Quotes\Post\SubscriptionData\PeriodDaysRequest $trial_period_days;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
