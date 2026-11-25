<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\Increment;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'increment_amount',
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The amount to increment the authorization by. This amount is in the authorization currency and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public int $increment_amount;
    /**
     * If set `true`, you may provide [amount](https://docs.stripe.com/api/issuing/authorizations/approve#approve_issuing_authorization-amount) to control how much to hold for the authorization.
     */
    public bool $is_amount_controllable;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'increment_amount' => is_int($value) ? $this->increment_amount = $value : parent::assignMember($name, $value),
            'is_amount_controllable' => is_bool($value) ? $this->is_amount_controllable = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
