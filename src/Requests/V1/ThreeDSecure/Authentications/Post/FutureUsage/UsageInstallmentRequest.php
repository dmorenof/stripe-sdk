<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\FutureUsage;

/**
 * installment
 */
final class UsageInstallmentRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'expiry',
        'number',
    ];

    public int $amount;
    public \StripeSDK\Requests\V1\ThreeDSecure\Authentications\Post\FutureUsage\Installment\InstallmentExpiryRequest $expiry;
    public \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\FutureUsage\Installment\InstallmentIntervalEnum $interval;
    public int $interval_count;
    public int $number;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\FutureUsage\Installment\InstallmentIntervalEnum::from($value) : parent::assignMember($name, $value),
            'interval_count' => is_int($value) ? $this->interval_count = $value : parent::assignMember($name, $value),
            'number' => is_int($value) ? $this->number = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
