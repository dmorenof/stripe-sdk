<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Treasury;

/**
 * BalanceImpactResource
 *
 * Change to a FinancialAccount's balance
 */
final class TransactionsResourceBalanceImpact extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'cash',
        'inbound_pending',
        'outbound_pending',
    ];

    /**
     * The change made to funds the user can spend right now.
     */
    public int $cash;
    /**
     * The change made to funds that are not spendable yet, but will become available at a later time.
     */
    public int $inbound_pending;
    /**
     * The change made to funds in the account, but not spendable because they are being held for pending outbound flows.
     */
    public int $outbound_pending;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cash' => is_int($value) ? $this->cash = $value : parent::assignMember($name, $value),
            'inbound_pending' => is_int($value) ? $this->inbound_pending = $value : parent::assignMember($name, $value),
            'outbound_pending' => is_int($value) ? $this->outbound_pending = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
