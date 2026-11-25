<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SubscriptionSchedules\BySchedule\Release;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Keep any cancellation on the subscription that the schedule has set
     */
    public bool $preserve_cancel_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'preserve_cancel_date' => is_bool($value) ? $this->preserve_cancel_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
