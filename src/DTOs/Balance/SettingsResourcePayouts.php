<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Balance;

/**
 * BalanceSettingsResourcePayouts
 */
final class SettingsResourcePayouts extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
    ];

    protected const array VALIDATION = [
        'statement_descriptor' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Configures per-currency rules for automatically transferring funds from the payments balance to a FinancialAccount.
     */
    public ?\StripeSDK\DTOs\Balance\SettingsResourcePayouts\ByCurrencyMap $automatic_transfer_rules_by_currency;
    /**
     * The minimum balance amount to retain per currency after automatic payouts. Only funds that exceed these amounts are paid out. Learn more about the [minimum balances for automatic payouts](/payouts/minimum-balances-for-automatic-payouts).
     */
    public ?\StripeSDK\DTOs\Balance\SettingsResourcePayouts\MinimumBalanceByCurrencyMap\ByCurrencyMap $minimum_balance_by_currency;
    /**
     * Details on when funds from charges are available, and when they are paid out to an external account. See our [Setting Bank and Debit Card Payouts](https://docs.stripe.com/connect/bank-transfers#payout-information) documentation for details.
     */
    public ?\StripeSDK\DTOs\Balance\SettingsResourcePayoutSchedule $schedule;
    /**
     * The text that appears on the bank account statement for payouts. If not set, this defaults to the platform's bank descriptor as set in the Dashboard.
     */
    public ?string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * Whether the funds in this account can be paid out.
     */
    public \StripeSDK\Enums\Balance\SettingsResourcePayouts\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'schedule' => $value === null || $value instanceof \stdClass ? $this->schedule = $value === null ? null : new \StripeSDK\DTOs\Balance\SettingsResourcePayoutSchedule($value) : parent::assignMember($name, $value),
            'statement_descriptor' => $value === null || is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Balance\SettingsResourcePayouts\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
