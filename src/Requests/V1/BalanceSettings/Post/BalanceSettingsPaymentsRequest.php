<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\BalanceSettings\Post;

/**
 * payments
 *
 * Settings that apply to the [Payments Balance](https://docs.stripe.com/api/balance).
 */
final class BalanceSettingsPaymentsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $debit_negative_balances;
    public \StripeSDK\Requests\V1\BalanceSettings\Post\Payments\PaymentsPayoutsRequest $payouts;
    public \StripeSDK\Requests\V1\BalanceSettings\Post\Payments\SettlementTimingRequest $settlement_timing;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'debit_negative_balances' => is_bool($value) ? $this->debit_negative_balances = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
