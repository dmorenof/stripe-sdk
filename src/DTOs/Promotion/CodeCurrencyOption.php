<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Promotion;

/**
 * PromotionCodeCurrencyOption
 */
final class CodeCurrencyOption extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'minimum_amount',
    ];

    /**
     * Minimum amount required to redeem this Promotion Code into a Coupon (e.g., a purchase must be $100 or more to work).
     */
    public int $minimum_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'minimum_amount' => is_int($value) ? $this->minimum_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
