<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\BankConnectionsResource;

/**
 * BankConnectionsResourceBalance
 */
final class Balance extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'as_of',
        'current',
        'type',
    ];

    /**
     * The time that the external institution calculated this balance. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $as_of;
    public \StripeSDK\DTOs\BankConnectionsResource\BalanceApiResourceCashBalance $cash;
    public \StripeSDK\DTOs\BankConnectionsResource\BalanceApiResourceCreditBalance $credit;
    /**
     * The balances owed to (or by) the account holder, before subtracting any outbound pending transactions or adding any inbound pending transactions.
     *
     * Each key is a three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase.
     *
     * Each value is a integer amount. A positive amount indicates money owed to the account holder. A negative amount indicates money owed by the account holder.
     */
    public \StripeSDK\DTOs\BankConnectionsResource\Balance\CurrentMap $current;
    /**
     * The `type` of the balance. An additional hash is included on the balance with a name matching this value.
     */
    public \StripeSDK\Enums\BankConnectionsResource\Balance\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'as_of' => is_int($value) ? $this->as_of = $value : parent::assignMember($name, $value),
            'cash' => $value instanceof \stdClass ? $this->cash = new \StripeSDK\DTOs\BankConnectionsResource\BalanceApiResourceCashBalance($value) : parent::assignMember($name, $value),
            'credit' => $value instanceof \stdClass ? $this->credit = new \StripeSDK\DTOs\BankConnectionsResource\BalanceApiResourceCreditBalance($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\BankConnectionsResource\Balance\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
