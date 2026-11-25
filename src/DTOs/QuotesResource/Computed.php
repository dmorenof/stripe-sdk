<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\QuotesResource;

/**
 * QuotesResourceComputed
 */
final class Computed extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'upfront',
    ];

    /**
     * The definitive totals and line items the customer will be charged on a recurring basis. Takes into account the line items with recurring prices and discounts with `duration=forever` coupons only. Defaults to `null` if no inputted line items with recurring prices.
     */
    public ?\StripeSDK\DTOs\QuotesResource\Recurring $recurring;
    public \StripeSDK\DTOs\QuotesResource\Upfront $upfront;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'recurring' => $value === null || $value instanceof \stdClass ? $this->recurring = $value === null ? null : new \StripeSDK\DTOs\QuotesResource\Recurring($value) : parent::assignMember($name, $value),
            'upfront' => $value instanceof \stdClass ? $this->upfront = new \StripeSDK\DTOs\QuotesResource\Upfront($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
