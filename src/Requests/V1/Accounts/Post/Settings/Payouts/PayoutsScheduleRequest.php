<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Settings\Payouts;

/**
 * transfer_schedule_specs
 */
final class PayoutsScheduleRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'interval' => [
            'maxLength' => 5000,
        ],
        'weekly_anchor' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\Accounts\Post\Settings\Payouts\Schedule\DelayDaysRequest $delay_days;
    public \StripeSDK\Enums\V1\Accounts\Post\Settings\Payouts\Schedule\ScheduleIntervalEnum $interval {
        set {
            $this->assigning('interval', $value);
            $this->interval = $value;
        }
    }
    public int $monthly_anchor;
    public \StripeSDK\Collections\IntegerCollection $monthly_payout_days;
    public \StripeSDK\Enums\V1\Accounts\Post\Settings\Payouts\Schedule\WeeklyAnchorEnum $weekly_anchor {
        set {
            $this->assigning('weekly_anchor', $value);
            $this->weekly_anchor = $value;
        }
    }
    public \StripeSDK\Collections\V1\Accounts\Post\Settings\Payouts\Schedule\PayoutDaysCollection $weekly_payout_days;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'interval' => is_string($value) ? $this->interval = \StripeSDK\Enums\V1\Accounts\Post\Settings\Payouts\Schedule\ScheduleIntervalEnum::from($value) : parent::assignMember($name, $value),
            'monthly_anchor' => is_int($value) ? $this->monthly_anchor = $value : parent::assignMember($name, $value),
            'monthly_payout_days' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->monthly_payout_days = new \StripeSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'weekly_anchor' => is_string($value) ? $this->weekly_anchor = \StripeSDK\Enums\V1\Accounts\Post\Settings\Payouts\Schedule\WeeklyAnchorEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
