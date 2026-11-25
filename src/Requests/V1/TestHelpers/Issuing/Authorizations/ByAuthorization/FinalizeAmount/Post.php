<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\FinalizeAmount;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'final_amount',
    ];

    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The final authorization amount that will be captured by the merchant. This amount is in the authorization currency and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public int $final_amount;
    /**
     * Fleet-specific information for authorizations using Fleet cards.
     */
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\FinalizeAmount\Post\FinalizeAmountFleetRequest $fleet;
    /**
     * Information about fuel that was purchased with this transaction.
     */
    public \StripeSDK\Requests\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\FinalizeAmount\Post\FinalizeAmountFuelRequest $fuel;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'final_amount' => is_int($value) ? $this->final_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
