<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Credit;

/**
 * CreditNotesPretaxCreditAmount
 */
final class NotesPretaxCreditAmount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'type',
    ];

    /**
     * The amount, in cents (or local equivalent), of the pretax credit amount.
     */
    public int $amount;
    /**
     * The credit balance transaction that was applied to get this pretax credit amount.
     */
    public \StripeSDK\DTOs\Credit\NotesPretaxCreditAmount\BalanceTransactionDTO $credit_balance_transaction;
    /**
     * The discount that was applied to get this pretax credit amount.
     */
    public \StripeSDK\DTOs\Credit\NotesPretaxCreditAmount\DiscountDTO $discount;
    /**
     * Type of the pretax credit amount referenced.
     */
    public \StripeSDK\Enums\Credit\NotesPretaxCreditAmount\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Credit\NotesPretaxCreditAmount\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
