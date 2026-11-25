<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Transfer;

/**
 * TransferSchedule
 */
final class Schedule extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'delay_days',
        'interval',
    ];

    protected const array VALIDATION = [
        'interval' => [
            'maxLength' => 5000,
        ],
        'weekly_anchor' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The number of days charges for the account will be held before being paid out.
     */
    public int $delay_days;
    /**
     * How frequently funds will be paid out. One of `manual` (payouts only created via API call), `daily`, `weekly`, or `monthly`.
     */
    public string $interval {
        set {
            $this->assigning('interval', $value);
            $this->interval = $value;
        }
    }
    /**
     * The day of the month funds will be paid out. Only shown if `interval` is monthly. Payouts scheduled between the 29th and 31st of the month are sent on the last day of shorter months.
     */
    public int $monthly_anchor;
    /**
     * The days of the month funds will be paid out. Only shown if `interval` is monthly. Payouts scheduled between the 29th and 31st of the month are sent on the last day of shorter months.
     */
    public \StripeSDK\Collections\IntegerCollection $monthly_payout_days;
    /**
     * The day of the week funds will be paid out, of the style 'monday', 'tuesday', etc. Only shown if `interval` is weekly.
     */
    public string $weekly_anchor {
        set {
            $this->assigning('weekly_anchor', $value);
            $this->weekly_anchor = $value;
        }
    }
    /**
     * The days of the week when available funds are paid out, specified as an array, for example, [`monday`, `tuesday`]. Only shown if `interval` is weekly.
     */
    public \StripeSDK\Collections\Transfer\Schedule\PayoutDaysCollection $weekly_payout_days;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'delay_days' => is_int($value) ? $this->delay_days = $value : parent::assignMember($name, $value),
            'interval' => is_string($value) ? $this->interval = $value : parent::assignMember($name, $value),
            'monthly_anchor' => is_int($value) ? $this->monthly_anchor = $value : parent::assignMember($name, $value),
            'monthly_payout_days' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->monthly_payout_days = new \StripeSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'weekly_anchor' => is_string($value) ? $this->weekly_anchor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
