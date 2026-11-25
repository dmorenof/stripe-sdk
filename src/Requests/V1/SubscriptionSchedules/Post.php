<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'from_subscription' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Controls how prorations and invoices for subscriptions are calculated and orchestrated.
     */
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\BillingModeRequest $billing_mode;
    /**
     * The identifier of the customer to create the subscription schedule for.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * The identifier of the account to create the subscription schedule for.
     */
    public string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * Object representing the subscription schedule's default settings.
     */
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\DefaultSettingsRequest $default_settings;
    /**
     * Behavior of the subscription schedule and underlying subscription when it ends. Possible values are `release` or `cancel` with the default being `release`. `release` will end the subscription schedule and keep the underlying subscription running. `cancel` will end the subscription schedule and cancel the underlying subscription.
     */
    public \StripeSDK\Enums\V1\SubscriptionSchedules\Post\EndBehaviorEnum $end_behavior;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Migrate an existing subscription to be managed by a subscription schedule. If this parameter is set, a subscription schedule will be created using the subscription's item(s), set to auto-renew using the subscription's interval. When using this parameter, other parameters (such as phase values) cannot be set. To create a subscription schedule with other modifications, we recommend making two separate API calls.
     */
    public string $from_subscription {
        set {
            $this->assigning('from_subscription', $value);
            $this->from_subscription = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\SubscriptionSchedulesMetadataRequest $metadata;
    /**
     * Configures the subscription's pause behavior and, optionally, its resume behavior. Only one entry is supported.
     */
    public \StripeSDK\Collections\V1\SubscriptionSchedules\Post\PauseSchedulesCollection $pause_schedules;
    /**
     * List representing phases of the subscription schedule. Each phase can be customized to have different durations, plans, and coupons. If there are multiple phases, the `end_date` of one phase will always equal the `start_date` of the next phase.
     */
    public \StripeSDK\Collections\V1\SubscriptionSchedules\Post\SubscriptionSchedulesPhasesCollection $phases;
    /**
     * When the subscription schedule starts. We recommend using `now` so that it starts the subscription immediately, and to avoid unexpected behavior due to request delays or clock skew resulting in a slightly backdated or postdated start. You can also use a Unix timestamp to backdate the subscription so that it starts on a past date, or set a future date for the subscription to start on.
     */
    public \StripeSDK\Requests\V1\SubscriptionSchedules\Post\StartDateRequest $start_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_account' => is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'end_behavior' => is_string($value) ? $this->end_behavior = \StripeSDK\Enums\V1\SubscriptionSchedules\Post\EndBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'from_subscription' => is_string($value) ? $this->from_subscription = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
