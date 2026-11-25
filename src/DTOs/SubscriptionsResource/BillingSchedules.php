<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\SubscriptionsResource;

/**
 * Billing Schedule
 *
 * Sets the billing schedule for the subscription.
 */
final class BillingSchedules extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'bill_until',
        'key',
    ];

    protected const array VALIDATION = [
        'key' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Specifies which subscription items the billing schedule applies to.
     */
    public ?\StripeSDK\Collections\SubscriptionsResource\BillingSchedules\AppliesToCollection $applies_to;
    public \StripeSDK\DTOs\SubscriptionsResource\BillingSchedulesBillUntil $bill_until;
    /**
     * Unique identifier for the billing schedule.
     */
    public string $key {
        set {
            $this->assigning('key', $value);
            $this->key = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applies_to' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->applies_to = $value === null ? null : new \StripeSDK\Collections\SubscriptionsResource\BillingSchedules\AppliesToCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\SubscriptionsResource\BillingSchedulesAppliesTo::class)) : parent::assignMember($name, $value),
            'bill_until' => $value instanceof \stdClass ? $this->bill_until = new \StripeSDK\DTOs\SubscriptionsResource\BillingSchedulesBillUntil($value) : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
