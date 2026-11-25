<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingTransactionAmountDetails
 */
final class TransactionAmountDetails extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The fee charged by the ATM for the cash withdrawal.
     */
    public ?int $atm_fee;
    /**
     * The amount of cash requested by the cardholder.
     */
    public ?int $cashback_amount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'atm_fee' => $value === null || is_int($value) ? $this->atm_fee = $value : parent::assignMember($name, $value),
            'cashback_amount' => $value === null || is_int($value) ? $this->cashback_amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
