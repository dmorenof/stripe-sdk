<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Balance;

/**
 * BalanceSettingsResourcePayments
 */
final class SettingsResourcePayments extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'settlement_timing',
    ];

    /**
     * A Boolean indicating if Stripe should try to reclaim negative balances from an attached bank account. See [Understanding Connect account balances](/connect/account-balances) for details. The default value is `false` when [controller.requirement_collection](/api/accounts/object#account_object-controller-requirement_collection) is `application`, which includes Custom accounts, otherwise `true`.
     */
    public ?bool $debit_negative_balances;
    /**
     * Settings specific to the account's payouts.
     */
    public ?\StripeSDK\DTOs\Balance\SettingsResourcePayouts $payouts;
    public \StripeSDK\DTOs\Balance\SettingsResourceSettlementTiming $settlement_timing;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'debit_negative_balances' => $value === null || is_bool($value) ? $this->debit_negative_balances = $value : parent::assignMember($name, $value),
            'payouts' => $value === null || $value instanceof \stdClass ? $this->payouts = $value === null ? null : new \StripeSDK\DTOs\Balance\SettingsResourcePayouts($value) : parent::assignMember($name, $value),
            'settlement_timing' => $value instanceof \stdClass ? $this->settlement_timing = new \StripeSDK\DTOs\Balance\SettingsResourceSettlementTiming($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
