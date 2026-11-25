<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BalanceSettings\Post\Payments;

/**
 * payouts
 */
final class PaymentsPayoutsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'statement_descriptor' => [
            'maxLength' => 22,
        ],
    ];

    public \StripeSDK\Requests\V1\BalanceSettings\Post\Payments\Payouts\ByCurrencyRequest $automatic_transfer_rules_by_currency;
    public \StripeSDK\Requests\V1\BalanceSettings\Post\Payments\Payouts\AnyOfMinimumBalanceByCurrency\ByCurrencyRequest $minimum_balance_by_currency;
    public \StripeSDK\Requests\V1\BalanceSettings\Post\Payments\Payouts\PayoutsScheduleRequest $schedule;
    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
