<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Object representing the subscription schedule's default settings.
     */
    public \StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post\DefaultSettingsRequest $default_settings;
    /**
     * Behavior of the subscription schedule and underlying subscription when it ends. Possible values are `release` or `cancel` with the default being `release`. `release` will end the subscription schedule and keep the underlying subscription running. `cancel` will end the subscription schedule and cancel the underlying subscription.
     */
    public \StripeSDK\Enums\V1\SubscriptionSchedules\BySchedule\Post\EndBehaviorEnum $end_behavior;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post\ByScheduleMetadataRequest $metadata;
    /**
     * Configures the subscription's pause behavior and, optionally, its resume behavior. Only one entry is supported. Include a key to update an existing entry. Omit to leave an existing pause schedule unchanged, or pass "" to clear it.
     */
    public \StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Post\PauseSchedulesRequest $pause_schedules;
    /**
     * List representing phases of the subscription schedule. Each phase can be customized to have different durations, plans, and coupons. If there are multiple phases, the `end_date` of one phase will always equal the `start_date` of the next phase. Note that past phases can be omitted.
     */
    public \StripeSDK\Collections\V1\SubscriptionSchedules\BySchedule\Post\BySchedulePhasesCollection $phases;
    /**
     * If the update changes the billing configuration (item price, quantity, etc.) of the current phase, indicates how prorations from this change should be handled. The default value is `create_prorations`.
     */
    public \StripeSDK\Enums\V1\SubscriptionSchedules\BySchedule\Post\ProrationBehaviorEnum $proration_behavior;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'end_behavior' => is_string($value) ? $this->end_behavior = \StripeSDK\Enums\V1\SubscriptionSchedules\BySchedule\Post\EndBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'proration_behavior' => is_string($value) ? $this->proration_behavior = \StripeSDK\Enums\V1\SubscriptionSchedules\BySchedule\Post\ProrationBehaviorEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
