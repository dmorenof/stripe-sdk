<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Balance;

/**
 * BalanceNetAvailable
 */
final class NetAvailable extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'destination',
    ];

    protected const array VALIDATION = [
        'destination' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Net balance amount, subtracting fees from platform-set pricing.
     */
    public int $amount;
    /**
     * ID of the external account for this net balance (not expandable).
     */
    public string $destination {
        set {
            $this->assigning('destination', $value);
            $this->destination = $value;
        }
    }
    public \StripeSDK\DTOs\Balance\AmountBySourceType $source_types;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'destination' => is_string($value) ? $this->destination = $value : parent::assignMember($name, $value),
            'source_types' => $value instanceof \stdClass ? $this->source_types = new \StripeSDK\DTOs\Balance\AmountBySourceType($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
