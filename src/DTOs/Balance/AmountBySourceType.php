<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Balance;

/**
 * BalanceAmountBySourceType
 */
final class AmountBySourceType extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Amount coming from [legacy US ACH payments](https://docs.stripe.com/ach-deprecated).
     */
    public int $bank_account;
    /**
     * Amount coming from most payment methods, including cards as well as [non-legacy bank debits](https://docs.stripe.com/payments/bank-debits).
     */
    public int $card;
    /**
     * Amount coming from [FPX](https://docs.stripe.com/payments/fpx), a Malaysian payment method.
     */
    public int $fpx;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bank_account' => is_int($value) ? $this->bank_account = $value : parent::assignMember($name, $value),
            'card' => is_int($value) ? $this->card = $value : parent::assignMember($name, $value),
            'fpx' => is_int($value) ? $this->fpx = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
