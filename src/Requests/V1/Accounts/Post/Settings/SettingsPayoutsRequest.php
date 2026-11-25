<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Accounts\Post\Settings;

/**
 * payout_settings_specs
 */
final class SettingsPayoutsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'statement_descriptor' => [
            'maxLength' => 22,
        ],
    ];

    public bool $debit_negative_balances;
    public \StripeSDK\Requests\V1\Accounts\Post\Settings\Payouts\PayoutsScheduleRequest $schedule;
    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'debit_negative_balances' => is_bool($value) ? $this->debit_negative_balances = $value : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
