<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Billing\Meters;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'default_aggregation',
        'display_name',
        'event_name',
    ];

    protected const array VALIDATION = [
        'display_name' => [
            'maxLength' => 250,
        ],
        'event_name' => [
            'maxLength' => 100,
        ],
    ];

    /**
     * Fields that specify how to map a meter event to a customer.
     */
    public \StripeSDK\Requests\V1\Billing\Meters\Post\CustomerMappingRequest $customer_mapping;
    /**
     * The default settings to aggregate a meter's events with.
     */
    public \StripeSDK\Requests\V1\Billing\Meters\Post\DefaultAggregationRequest $default_aggregation;
    /**
     * The meter’s name. Not visible to the customer.
     */
    public string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    /**
     * The name of the meter event to record usage for. Corresponds with the `event_name` field on meter events.
     */
    public string $event_name {
        set {
            $this->assigning('event_name', $value);
            $this->event_name = $value;
        }
    }
    /**
     * The time window which meter events have been pre-aggregated for, if any.
     */
    public \StripeSDK\Enums\V1\Billing\Meters\Post\TimeWindowEnum $event_time_window;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Fields that specify how to calculate a meter event's value.
     */
    public \StripeSDK\Requests\V1\Billing\Meters\Post\ValueSettingsRequest $value_settings;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'display_name' => is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'event_name' => is_string($value) ? $this->event_name = $value : parent::assignMember($name, $value),
            'event_time_window' => is_string($value) ? $this->event_time_window = \StripeSDK\Enums\V1\Billing\Meters\Post\TimeWindowEnum::from($value) : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
