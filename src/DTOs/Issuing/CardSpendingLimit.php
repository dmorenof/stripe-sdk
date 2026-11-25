<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingCardSpendingLimit
 */
final class CardSpendingLimit extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'interval',
    ];

    /**
     * Maximum amount allowed to spend per interval. This amount is in the card's currency and in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal).
     */
    public int $amount;
    /**
     * Array of strings containing [categories](https://docs.stripe.com/api#issuing_authorization_object-merchant_data-category) this limit applies to. Omitting this field will apply the limit to all categories.
     */
    public ?\StripeSDK\Collections\Issuing\CardSpendingLimit\CategoriesCollection $categories;
    /**
     * Interval (or event) to which the amount applies.
     */
    public \StripeSDK\Enums\Issuing\CardSpendingLimit\IntervalEnum $interval;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\Issuing\CardSpendingLimit\IntervalEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
