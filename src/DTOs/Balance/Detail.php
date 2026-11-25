<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Balance;

/**
 * BalanceDetail
 */
final class Detail extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'available',
    ];

    /**
     * Funds that are available for use.
     */
    public \StripeSDK\Collections\Balance\AvailableCollection $available;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'available' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->available = new \StripeSDK\Collections\Balance\AvailableCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Balance\Amount::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
