<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\FutureUsage;

/**
 * recurring
 */
final class UsageRecurringRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'expiry',
    ];

    public int $amount;
    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\FutureUsage\Recurring\RecurringExpiryRequest $expiry;
    public \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\FutureUsage\Recurring\RecurringIntervalEnum $interval;
    public int $interval_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\FutureUsage\Recurring\RecurringIntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
