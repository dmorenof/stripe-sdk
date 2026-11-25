<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Billing\MeterEventAdjustments;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'event_name',
        'type',
    ];

    protected const array VALIDATION = [
        'event_name' => [
            'maxLength' => 100,
        ],
    ];

    /**
     * Specifies which event to cancel.
     */
    public \StripeSDK\Requests\V1\Billing\MeterEventAdjustments\Post\MeterEventAdjustmentsCancelRequest $cancel;
    /**
     * The name of the meter event. Corresponds with the `event_name` field on a meter.
     */
    public string $event_name {
        set {
            $this->assigning('event_name', $value);
            $this->event_name = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Specifies whether to cancel a single event or a range of events for a time period. Time period cancellation is not supported yet.
     */
    public \StripeSDK\Enums\V1\Billing\MeterEventAdjustments\Post\MeterEventAdjustmentsTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'event_name' => is_string($value) ? $this->event_name = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Billing\MeterEventAdjustments\Post\MeterEventAdjustmentsTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
