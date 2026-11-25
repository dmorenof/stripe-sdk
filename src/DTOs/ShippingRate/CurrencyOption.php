<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ShippingRate;

/**
 * ShippingRateCurrencyOption
 */
final class CurrencyOption extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'tax_behavior',
    ];

    /**
     * A non-negative integer in cents representing how much to charge.
     */
    public int $amount;
    /**
     * Specifies whether the rate is considered inclusive of taxes or exclusive of taxes. One of `inclusive`, `exclusive`, or `unspecified`.
     */
    public \StripeSDK\Enums\ShippingRate\CurrencyOption\TaxBehaviorEnum $tax_behavior;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\ShippingRate\CurrencyOption\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
