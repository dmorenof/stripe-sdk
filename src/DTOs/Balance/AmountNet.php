<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Balance;

/**
 * BalanceAmountNet
 */
final class AmountNet extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
    ];

    /**
     * Balance amount.
     */
    public int $amount;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * Breakdown of balance by destination.
     */
    public \StripeSDK\Collections\Balance\AmountNet\NetAvailableCollection $net_available;
    public \StripeSDK\DTOs\Balance\AmountBySourceType $source_types;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'net_available' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->net_available = new \StripeSDK\Collections\Balance\AmountNet\NetAvailableCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Balance\NetAvailable::class)) : parent::assignMember($name, $value),
            'source_types' => $value instanceof \stdClass ? $this->source_types = new \StripeSDK\DTOs\Balance\AmountBySourceType($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
