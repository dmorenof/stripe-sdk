<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BalanceSettings\Post\Payments\Payouts;

/**
 * payout_schedule
 */
final class PayoutsScheduleRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\BalanceSettings\Post\Payments\Payouts\Schedule\ScheduleIntervalEnum $interval;
    public \StripeSDK\Collections\IntegerCollection $monthly_payout_days;
    public \StripeSDK\Collections\V1\BalanceSettings\Post\Payments\Payouts\Schedule\PayoutDaysCollection $weekly_payout_days;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\V1\BalanceSettings\Post\Payments\Payouts\Schedule\ScheduleIntervalEnum::from($value) : parent::assignMember($name, $value),
            'monthly_payout_days' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->monthly_payout_days = new \StripeSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
