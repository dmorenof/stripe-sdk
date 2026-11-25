<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Balance;

/**
 * BalanceSettingsResourceSettlementTiming
 */
final class SettingsResourceSettlementTiming extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'delay_days',
    ];

    /**
     * The number of days charge funds are held before becoming available.
     */
    public int $delay_days;
    /**
     * The number of days charge funds are held before becoming available. If present, overrides the default, or minimum available, for the account.
     */
    public int $delay_days_override;
    /**
     * Customized start of day configuration for automatic payouts to group and send payments in local timezones with a customized day starting time. For details, see our [Customized start of day](/connect/customized-start-of-day) documentation.
     */
    public ?\StripeSDK\DTOs\Balance\SettingsResourceStartOfDay $start_of_day;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'delay_days' => is_int($value) ? $this->delay_days = $value : parent::assignMember($name, $value),
            'delay_days_override' => is_int($value) ? $this->delay_days_override = $value : parent::assignMember($name, $value),
            'start_of_day' => $value === null || $value instanceof \stdClass ? $this->start_of_day = $value === null ? null : new \StripeSDK\DTOs\Balance\SettingsResourceStartOfDay($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
