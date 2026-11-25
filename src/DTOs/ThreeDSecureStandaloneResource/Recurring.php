<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ThreeDSecureStandaloneResource;

/**
 * Recurring Detail
 *
 * Details about recurring payments
 */
final class Recurring extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'expiry',
        'interval',
        'interval_count',
    ];

    /**
     * A non-negative integer representing the amount in the [smallest currency unit](/currencies#zero-decimal).
     */
    public int $amount;
    public \StripeSDK\DTOs\ThreeDSecureStandaloneResource\Expiry $expiry;
    /**
     * The unit of time for `interval_count`.
     */
    public \StripeSDK\Enums\ThreeDSecureStandaloneResource\Recurring\IntervalEnum $interval;
    /**
     * The minimum number of time intervals between authorizations.
     */
    public int $interval_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'expiry' => $value instanceof \stdClass ? $this->expiry = new \StripeSDK\DTOs\ThreeDSecureStandaloneResource\Expiry($value) : parent::assignMember($name, $value),
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\ThreeDSecureStandaloneResource\Recurring\IntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
