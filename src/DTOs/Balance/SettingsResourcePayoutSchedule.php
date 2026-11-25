<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Balance;

/**
 * BalanceSettingsResourcePayoutSchedule
 */
final class SettingsResourcePayoutSchedule extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * How frequently funds will be paid out. One of `manual` (payouts only created via API call), `daily`, `weekly`, or `monthly`.
     */
    public ?\StripeSDK\Enums\Balance\SettingsResourcePayoutSchedule\IntervalEnum $interval;
    /**
     * The day of the month funds will be paid out. Only shown if `interval` is monthly. Payouts scheduled between the 29th and 31st of the month are sent on the last day of shorter months.
     */
    public \StripeSDK\Collections\IntegerCollection $monthly_payout_days;
    /**
     * The days of the week when available funds are paid out, specified as an array, for example, [`monday`, `tuesday`]. Only shown if `interval` is weekly.
     */
    public \StripeSDK\Collections\Balance\SettingsResourcePayoutSchedule\PayoutDaysCollection $weekly_payout_days;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interval' => $value === null || is_string($value) ? $this->interval = $value === null ? null : \StripeSDK\Enums\Balance\SettingsResourcePayoutSchedule\IntervalEnum::from($value) : parent::assignMember($name, $value),
            'monthly_payout_days' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->monthly_payout_days = new \StripeSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
