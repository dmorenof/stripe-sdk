<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\TestClocks\ByTestClock\Advance;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'frozen_time',
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The time to advance the test clock. Must be after the test clock's current frozen time. Cannot be more than two intervals in the future from the shortest subscription in this test clock. If there are no subscriptions in this test clock, it cannot be more than two years in the future.
     * Format: unix-time
     */
    public int $frozen_time;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'frozen_time' => is_int($value) ? $this->frozen_time = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
