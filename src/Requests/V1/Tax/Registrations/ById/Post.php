<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Registrations\ById;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Time at which the registration becomes active. It can be either `now` to indicate the current time, or a timestamp measured in seconds since the Unix epoch.
     */
    public \StripeSDK\Requests\V1\Tax\Registrations\ById\Post\ActiveFromRequest $active_from;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * If set, the registration stops being active at this time. If not set, the registration will be active indefinitely. It can be either `now` to indicate the current time, or a timestamp measured in seconds since the Unix epoch.
     */
    public \StripeSDK\Requests\V1\Tax\Registrations\ById\Post\ExpiresAtRequest $expires_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
